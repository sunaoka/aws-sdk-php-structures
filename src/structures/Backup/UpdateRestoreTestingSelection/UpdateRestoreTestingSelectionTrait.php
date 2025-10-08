<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateRestoreTestingSelection;

trait UpdateRestoreTestingSelectionTrait
{
    /**
     * @param UpdateRestoreTestingSelectionRequest $args
     * @return UpdateRestoreTestingSelectionResponse
     */
    public function updateRestoreTestingSelection(UpdateRestoreTestingSelectionRequest $args)
    {
        $result = parent::updateRestoreTestingSelection($args->toArray());
        return new UpdateRestoreTestingSelectionResponse($result->toArray());
    }
}
