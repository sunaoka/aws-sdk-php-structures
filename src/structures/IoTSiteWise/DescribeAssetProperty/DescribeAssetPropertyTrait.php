<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty;

trait DescribeAssetPropertyTrait
{
    /**
     * @param DescribeAssetPropertyRequest $args
     * @return DescribeAssetPropertyResponse
     */
    public function describeAssetProperty(DescribeAssetPropertyRequest $args)
    {
        $result = parent::describeAssetProperty($args->toArray());
        return new DescribeAssetPropertyResponse($result->toArray());
    }
}
