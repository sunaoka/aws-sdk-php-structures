<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'registration-type'|'registration-status' $Name
 * @property list<string> $Values
 */
class RegistrationFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'registration-type'|'registration-status',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
