<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteDataSetRefreshProperties;

trait DeleteDataSetRefreshPropertiesTrait
{
    /**
     * @param DeleteDataSetRefreshPropertiesRequest $args
     * @return DeleteDataSetRefreshPropertiesResponse
     */
    public function deleteDataSetRefreshProperties(DeleteDataSetRefreshPropertiesRequest $args)
    {
        $result = parent::deleteDataSetRefreshProperties($args->toArray());
        return new DeleteDataSetRefreshPropertiesResponse($result->toArray());
    }
}
