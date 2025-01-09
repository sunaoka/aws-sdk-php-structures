<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT_ID'|'CLUSTER_NAME'|'RESOURCE_TYPE'|'COVERAGE_STATUS'|'ADDON_VERSION'|'MANAGEMENT_TYPE'|'EKS_CLUSTER_NAME'|'ECS_CLUSTER_NAME'|'AGENT_VERSION'|'INSTANCE_ID'|'CLUSTER_ARN' $CriterionKey
 * @property CoverageFilterCondition $FilterCondition
 */
class CoverageFilterCriterion extends Shape
{
    /**
     * @param array{
     *     CriterionKey?: 'ACCOUNT_ID'|'CLUSTER_NAME'|'RESOURCE_TYPE'|'COVERAGE_STATUS'|'ADDON_VERSION'|'MANAGEMENT_TYPE'|'EKS_CLUSTER_NAME'|'ECS_CLUSTER_NAME'|'AGENT_VERSION'|'INSTANCE_ID'|'CLUSTER_ARN',
     *     FilterCondition?: CoverageFilterCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
