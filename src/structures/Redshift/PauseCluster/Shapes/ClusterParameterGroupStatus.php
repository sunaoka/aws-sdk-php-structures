<?php

namespace Sunaoka\Aws\Structures\Redshift\PauseCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterGroupName
 * @property string $ParameterApplyStatus
 * @property list<ClusterParameterStatus> $ClusterParameterStatusList
 */
class ClusterParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string,
     *     ParameterApplyStatus?: string,
     *     ClusterParameterStatusList?: list<ClusterParameterStatus>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
