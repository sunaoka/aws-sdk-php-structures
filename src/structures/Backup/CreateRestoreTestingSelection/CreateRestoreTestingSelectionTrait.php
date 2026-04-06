<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreTestingSelection;

trait CreateRestoreTestingSelectionTrait
{
    /**
     * @param CreateRestoreTestingSelectionRequest $args
     * @return CreateRestoreTestingSelectionResponse
     */
    public function createRestoreTestingSelection(CreateRestoreTestingSelectionRequest $args)
    {
        $result = parent::createRestoreTestingSelection($args->toArray());
        return new CreateRestoreTestingSelectionResponse($result->toArray());
    }
}
