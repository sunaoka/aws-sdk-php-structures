<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironmentNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property Shapes\TransitGatewayConfiguration|null $transitGatewayConfiguration
 * @property list<Shapes\CustomDNSServer>|null $customDNSConfiguration
 * @property string|null $clientToken
 */
class UpdateKxEnvironmentNetworkRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     transitGatewayConfiguration?: Shapes\TransitGatewayConfiguration|null,
     *     customDNSConfiguration?: list<Shapes\CustomDNSServer>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
