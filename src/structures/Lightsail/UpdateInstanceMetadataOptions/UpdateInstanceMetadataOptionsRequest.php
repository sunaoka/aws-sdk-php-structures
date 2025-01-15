<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateInstanceMetadataOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property 'optional'|'required'|null $httpTokens
 * @property 'disabled'|'enabled'|null $httpEndpoint
 * @property int|null $httpPutResponseHopLimit
 * @property 'disabled'|'enabled'|null $httpProtocolIpv6
 */
class UpdateInstanceMetadataOptionsRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     httpTokens?: 'optional'|'required'|null,
     *     httpEndpoint?: 'disabled'|'enabled'|null,
     *     httpPutResponseHopLimit?: int|null,
     *     httpProtocolIpv6?: 'disabled'|'enabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
