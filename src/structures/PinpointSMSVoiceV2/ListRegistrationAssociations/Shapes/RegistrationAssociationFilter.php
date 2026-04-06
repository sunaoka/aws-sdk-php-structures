<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListRegistrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resource-type'|'iso-country-code' $Name
 * @property list<string> $Values
 */
class RegistrationAssociationFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'resource-type'|'iso-country-code',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
