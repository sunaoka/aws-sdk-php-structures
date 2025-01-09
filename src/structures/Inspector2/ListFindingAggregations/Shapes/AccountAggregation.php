<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY' $findingType
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_LAMBDA_FUNCTION' $resourceType
 * @property 'CRITICAL'|'HIGH'|'ALL' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class AccountAggregation extends Shape
{
    /**
     * @param array{
     *     findingType?: 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY',
     *     resourceType?: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_LAMBDA_FUNCTION',
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
