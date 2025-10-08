<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreTestingSelections;

trait ListRestoreTestingSelectionsTrait
{
    /**
     * @param ListRestoreTestingSelectionsRequest $args
     * @return ListRestoreTestingSelectionsResponse
     */
    public function listRestoreTestingSelections(ListRestoreTestingSelectionsRequest $args)
    {
        $result = parent::listRestoreTestingSelections($args->toArray());
        return new ListRestoreTestingSelectionsResponse($result->toArray());
    }
}
