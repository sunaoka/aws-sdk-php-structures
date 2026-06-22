<?php

namespace Sunaoka\Aws\Structures\LambdaCore\CreateNetworkConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property 'IPv4'|'DualStack'|null $NetworkProtocol
 * @property list<'MicroVm'>|null $AssociatedComputeResourceTypes
 */
class NetworkConnectorVpcEgressConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     NetworkProtocol?: 'IPv4'|'DualStack'|null,
     *     AssociatedComputeResourceTypes?: list<'MicroVm'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
