<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsRedshiftClusterClusterParameterStatus>|null $ClusterParameterStatusList
 * @property string|null $ParameterApplyStatus
 * @property string|null $ParameterGroupName
 */
class AwsRedshiftClusterClusterParameterGroup extends Shape
{
    /**
     * @param array{
     *     ClusterParameterStatusList?: list<AwsRedshiftClusterClusterParameterStatus>|null,
     *     ParameterApplyStatus?: string|null,
     *     ParameterGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
