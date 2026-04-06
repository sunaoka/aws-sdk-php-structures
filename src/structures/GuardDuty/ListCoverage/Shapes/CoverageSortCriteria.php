<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT_ID'|'CLUSTER_NAME'|'COVERAGE_STATUS'|'ISSUE'|'ADDON_VERSION'|'UPDATED_AT'|'EKS_CLUSTER_NAME'|'ECS_CLUSTER_NAME'|'INSTANCE_ID'|null $AttributeName
 * @property 'ASC'|'DESC'|null $OrderBy
 */
class CoverageSortCriteria extends Shape
{
    /**
     * @param array{
     *     AttributeName?: 'ACCOUNT_ID'|'CLUSTER_NAME'|'COVERAGE_STATUS'|'ISSUE'|'ADDON_VERSION'|'UPDATED_AT'|'EKS_CLUSTER_NAME'|'ECS_CLUSTER_NAME'|'INSTANCE_ID'|null,
     *     OrderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
