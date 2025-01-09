<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME' $groupKey
 */
class Counts extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     groupKey?: 'SCAN_STATUS_CODE'|'SCAN_STATUS_REASON'|'ACCOUNT_ID'|'RESOURCE_TYPE'|'ECR_REPOSITORY_NAME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
