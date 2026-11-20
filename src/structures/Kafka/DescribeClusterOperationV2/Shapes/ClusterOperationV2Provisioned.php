<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrokerTypeUpgradeInfo|null $BrokerTypeUpgradeInfo
 * @property list<ClusterOperationStep>|null $OperationSteps
 * @property MutableClusterInfo|null $SourceClusterInfo
 * @property MutableClusterInfo|null $TargetClusterInfo
 * @property VpcConnectionInfo|null $VpcConnectionInfo
 */
class ClusterOperationV2Provisioned extends Shape
{
    /**
     * @param array{
     *     BrokerTypeUpgradeInfo?: BrokerTypeUpgradeInfo|null,
     *     OperationSteps?: list<ClusterOperationStep>|null,
     *     SourceClusterInfo?: MutableClusterInfo|null,
     *     TargetClusterInfo?: MutableClusterInfo|null,
     *     VpcConnectionInfo?: VpcConnectionInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
