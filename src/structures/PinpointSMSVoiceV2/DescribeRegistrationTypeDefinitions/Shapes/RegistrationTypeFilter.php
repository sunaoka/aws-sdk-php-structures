<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationTypeDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'supported-association-resource-type'|'supported-association-iso-country-code' $Name
 * @property list<string> $Values
 */
class RegistrationTypeFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'supported-association-resource-type'|'supported-association-iso-country-code',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
