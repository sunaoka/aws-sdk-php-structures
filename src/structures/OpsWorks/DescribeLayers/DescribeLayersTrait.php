<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLayers;

trait DescribeLayersTrait
{
    /**
     * @param DescribeLayersRequest $args
     * @return DescribeLayersResponse
     */
    public function describeLayers(DescribeLayersRequest $args)
    {
        $result = parent::describeLayers($args->toArray());
        return new DescribeLayersResponse($result->toArray());
    }
}
