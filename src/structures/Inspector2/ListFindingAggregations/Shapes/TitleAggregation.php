<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<StringFilter>|null $titles
 * @property list<StringFilter>|null $vulnerabilityIds
 * @property 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|null $resourceType
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property 'CRITICAL'|'HIGH'|'ALL'|null $sortBy
 * @property 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY'|null $findingType
 */
class TitleAggregation extends Shape
{
    /**
     * @param array{
     *     titles?: list<StringFilter>|null,
     *     vulnerabilityIds?: list<StringFilter>|null,
     *     resourceType?: 'AWS_EC2_INSTANCE'|'AWS_ECR_CONTAINER_IMAGE'|'AWS_LAMBDA_FUNCTION'|'CODE_REPOSITORY'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     sortBy?: 'CRITICAL'|'HIGH'|'ALL'|null,
     *     findingType?: 'NETWORK_REACHABILITY'|'PACKAGE_VULNERABILITY'|'CODE_VULNERABILITY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
