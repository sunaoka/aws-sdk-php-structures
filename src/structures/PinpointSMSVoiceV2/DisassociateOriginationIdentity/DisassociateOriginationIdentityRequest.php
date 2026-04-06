<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DisassociateOriginationIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string $OriginationIdentity
 * @property string $IsoCountryCode
 * @property string|null $ClientToken
 */
class DisassociateOriginationIdentityRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     OriginationIdentity: string,
     *     IsoCountryCode: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
