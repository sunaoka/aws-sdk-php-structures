<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingSelection;

trait GetRestoreTestingSelectionTrait
{
    /**
     * @param GetRestoreTestingSelectionRequest $args
     * @return GetRestoreTestingSelectionResponse
     */
    public function getRestoreTestingSelection(GetRestoreTestingSelectionRequest $args)
    {
        $result = parent::getRestoreTestingSelection($args->toArray());
        return new GetRestoreTestingSelectionResponse($result->toArray());
    }
}
