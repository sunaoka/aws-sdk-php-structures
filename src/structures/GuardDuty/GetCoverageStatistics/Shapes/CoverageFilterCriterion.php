<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCoverageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT_ID'|'CLUSTER_NAME'|'RESOURCE_TYPE'|'COVERAGE_STATUS'|'ADDON_VERSION'|null $CriterionKey
 * @property CoverageFilterCondition|null $FilterCondition
 */
class CoverageFilterCriterion extends Shape
{
    /**
     * @param array{
     *     CriterionKey?: 'ACCOUNT_ID'|'CLUSTER_NAME'|'RESOURCE_TYPE'|'COVERAGE_STATUS'|'ADDON_VERSION'|null,
     *     FilterCondition?: CoverageFilterCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
