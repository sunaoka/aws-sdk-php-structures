<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoEncryptionInfoDetails|null $EncryptionInfo
 * @property string|null $CurrentVersion
 * @property int|null $NumberOfBrokerNodes
 * @property string|null $ClusterName
 * @property AwsMskClusterClusterInfoClientAuthenticationDetails|null $ClientAuthentication
 * @property string|null $EnhancedMonitoring
 */
class AwsMskClusterClusterInfoDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionInfo?: AwsMskClusterClusterInfoEncryptionInfoDetails|null,
     *     CurrentVersion?: string|null,
     *     NumberOfBrokerNodes?: int|null,
     *     ClusterName?: string|null,
     *     ClientAuthentication?: AwsMskClusterClusterInfoClientAuthenticationDetails|null,
     *     EnhancedMonitoring?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
