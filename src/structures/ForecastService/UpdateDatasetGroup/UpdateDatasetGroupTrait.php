<?php

namespace Sunaoka\Aws\Structures\ForecastService\UpdateDatasetGroup;

trait UpdateDatasetGroupTrait
{
    /**
     * @param UpdateDatasetGroupRequest $args
     * @return UpdateDatasetGroupResponse
     */
    public function updateDatasetGroup(UpdateDatasetGroupRequest $args)
    {
        $result = parent::updateDatasetGroup($args->toArray());
        return new UpdateDatasetGroupResponse($result->toArray());
    }
}
