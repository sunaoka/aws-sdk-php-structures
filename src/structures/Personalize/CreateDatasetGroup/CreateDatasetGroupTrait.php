<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetGroup;

trait CreateDatasetGroupTrait
{
    /**
     * @param CreateDatasetGroupRequest $args
     * @return CreateDatasetGroupResponse
     */
    public function createDatasetGroup(CreateDatasetGroupRequest $args)
    {
        $result = parent::createDatasetGroup($args->toArray());
        return new CreateDatasetGroupResponse($result->toArray());
    }
}
