<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateNetworkConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property 'IPv4'|'DualStack'|null $NetworkProtocol
 * @property list<'MicroVm'|'WebFunction'>|null $AssociatedComputeResourceTypes
 * @property ElasticIpConfiguration|null $ElasticIpConfiguration
 */
class NetworkConnectorVpcEgressConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     NetworkProtocol?: 'IPv4'|'DualStack'|null,
     *     AssociatedComputeResourceTypes?: list<'MicroVm'|'WebFunction'>|null,
     *     ElasticIpConfiguration?: ElasticIpConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
