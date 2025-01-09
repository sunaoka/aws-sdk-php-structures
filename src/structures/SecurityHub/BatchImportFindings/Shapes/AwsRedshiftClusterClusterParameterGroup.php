<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsRedshiftClusterClusterParameterStatus> $ClusterParameterStatusList
 * @property string $ParameterApplyStatus
 * @property string $ParameterGroupName
 */
class AwsRedshiftClusterClusterParameterGroup extends Shape
{
    /**
     * @param array{
     *     ClusterParameterStatusList?: list<AwsRedshiftClusterClusterParameterStatus>,
     *     ParameterApplyStatus?: string,
     *     ParameterGroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
