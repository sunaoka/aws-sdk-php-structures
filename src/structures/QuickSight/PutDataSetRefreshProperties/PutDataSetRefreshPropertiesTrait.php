<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutDataSetRefreshProperties;

trait PutDataSetRefreshPropertiesTrait
{
    /**
     * @param PutDataSetRefreshPropertiesRequest $args
     * @return PutDataSetRefreshPropertiesResponse
     */
    public function putDataSetRefreshProperties(PutDataSetRefreshPropertiesRequest $args)
    {
        $result = parent::putDataSetRefreshProperties($args->toArray());
        return new PutDataSetRefreshPropertiesResponse($result->toArray());
    }
}
