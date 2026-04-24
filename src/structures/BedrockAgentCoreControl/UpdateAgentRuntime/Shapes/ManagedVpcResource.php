<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcIdentifier
 * @property list<string> $subnetIds
 * @property 'IPV4'|'IPV6' $endpointIpAddressType
 * @property list<string>|null $securityGroupIds
 * @property array<string, string>|null $tags
 * @property string|null $routingDomain
 */
class ManagedVpcResource extends Shape
{
    /**
     * @param array{
     *     vpcIdentifier: string,
     *     subnetIds: list<string>,
     *     endpointIpAddressType: 'IPV4'|'IPV6',
     *     securityGroupIds?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     routingDomain?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
