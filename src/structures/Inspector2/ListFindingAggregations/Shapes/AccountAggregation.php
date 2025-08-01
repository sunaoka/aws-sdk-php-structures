<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY'|null $findingType
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|null $resourceType
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 */
class AccountAggregation extends Shape
{
    /**
     * @param array{
     *     findingType?: 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY'|null,
     *     resourceType?: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
