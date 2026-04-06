<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListPoolOriginationIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OriginationIdentityArn
 * @property string $OriginationIdentity
 * @property string $IsoCountryCode
 * @property list<'SMS'|'VOICE'> $NumberCapabilities
 */
class OriginationIdentityMetadata extends Shape
{
    /**
     * @param array{
     *     OriginationIdentityArn: string,
     *     OriginationIdentity: string,
     *     IsoCountryCode: string,
     *     NumberCapabilities: list<'SMS'|'VOICE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
