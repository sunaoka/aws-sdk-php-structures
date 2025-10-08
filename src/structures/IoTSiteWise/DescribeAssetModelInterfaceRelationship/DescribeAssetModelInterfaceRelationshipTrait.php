<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModelInterfaceRelationship;

trait DescribeAssetModelInterfaceRelationshipTrait
{
    /**
     * @param DescribeAssetModelInterfaceRelationshipRequest $args
     * @return DescribeAssetModelInterfaceRelationshipResponse
     */
    public function describeAssetModelInterfaceRelationship(DescribeAssetModelInterfaceRelationshipRequest $args)
    {
        $result = parent::describeAssetModelInterfaceRelationship($args->toArray());
        return new DescribeAssetModelInterfaceRelationshipResponse($result->toArray());
    }
}
