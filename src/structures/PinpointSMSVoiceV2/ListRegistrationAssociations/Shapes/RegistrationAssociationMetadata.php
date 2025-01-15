<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListRegistrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $ResourceId
 * @property string $ResourceType
 * @property string|null $IsoCountryCode
 * @property string|null $PhoneNumber
 */
class RegistrationAssociationMetadata extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ResourceId: string,
     *     ResourceType: string,
     *     IsoCountryCode?: string|null,
     *     PhoneNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
