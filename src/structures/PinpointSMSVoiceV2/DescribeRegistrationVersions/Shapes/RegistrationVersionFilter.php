<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'registration-version-status' $Name
 * @property list<string> $Values
 */
class RegistrationVersionFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'registration-version-status',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
