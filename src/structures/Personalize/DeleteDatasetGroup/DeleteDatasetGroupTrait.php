<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteDatasetGroup;

trait DeleteDatasetGroupTrait
{
    /**
     * @param DeleteDatasetGroupRequest $args
     * @return void
     */
    public function deleteDatasetGroup(DeleteDatasetGroupRequest $args)
    {
        parent::deleteDatasetGroup($args->toArray());
    }
}
