<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\AssociateOriginationIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string $OriginationIdentity
 * @property string $IsoCountryCode
 * @property string|null $ClientToken
 */
class AssociateOriginationIdentityRequest extends Request
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
