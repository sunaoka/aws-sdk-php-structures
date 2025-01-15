<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME'|null $groupKey
 */
class Counts extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     groupKey?: 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
