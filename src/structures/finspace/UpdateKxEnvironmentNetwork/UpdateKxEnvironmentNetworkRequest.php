<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironmentNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property Shapes\TransitGatewayConfiguration $transitGatewayConfiguration
 * @property list<Shapes\CustomDNSServer> $customDNSConfiguration
 * @property string $clientToken
 */
class UpdateKxEnvironmentNetworkRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     transitGatewayConfiguration?: Shapes\TransitGatewayConfiguration,
     *     customDNSConfiguration?: list<Shapes\CustomDNSServer>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
