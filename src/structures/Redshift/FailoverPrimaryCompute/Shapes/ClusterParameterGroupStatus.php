<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterGroupName
 * @property string|null $ParameterApplyStatus
 * @property list<ClusterParameterStatus>|null $ClusterParameterStatusList
 */
class ClusterParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string|null,
     *     ParameterApplyStatus?: string|null,
     *     ClusterParameterStatusList?: list<ClusterParameterStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
