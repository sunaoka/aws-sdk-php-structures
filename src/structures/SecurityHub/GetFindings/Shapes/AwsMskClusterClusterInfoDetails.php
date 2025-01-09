<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoEncryptionInfoDetails $EncryptionInfo
 * @property string $CurrentVersion
 * @property int $NumberOfBrokerNodes
 * @property string $ClusterName
 * @property AwsMskClusterClusterInfoClientAuthenticationDetails $ClientAuthentication
 * @property string $EnhancedMonitoring
 */
class AwsMskClusterClusterInfoDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionInfo?: AwsMskClusterClusterInfoEncryptionInfoDetails,
     *     CurrentVersion?: string,
     *     NumberOfBrokerNodes?: int,
     *     ClusterName?: string,
     *     ClientAuthentication?: AwsMskClusterClusterInfoClientAuthenticationDetails,
     *     EnhancedMonitoring?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
