<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateInstanceMetadataOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property 'optional'|'required' $httpTokens
 * @property 'disabled'|'enabled' $httpEndpoint
 * @property int $httpPutResponseHopLimit
 * @property 'disabled'|'enabled' $httpProtocolIpv6
 */
class UpdateInstanceMetadataOptionsRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     httpTokens?: 'optional'|'required',
     *     httpEndpoint?: 'disabled'|'enabled',
     *     httpPutResponseHopLimit?: int,
     *     httpProtocolIpv6?: 'disabled'|'enabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
