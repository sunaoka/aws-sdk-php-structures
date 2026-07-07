<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME'|'PROVIDER'|'PROVIDER_ACCOUNT_ID'|'PROVIDER_REGION'|'PROVIDER_ORG_ID'|null $groupKey
 */
class Counts extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     groupKey?: 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME'|'PROVIDER'|'PROVIDER_ACCOUNT_ID'|'PROVIDER_REGION'|'PROVIDER_ORG_ID'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
