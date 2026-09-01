<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $MinLength
 * @property int<0, max>|null $MaxLength
 * @property string|null $Pattern
 * @property list<string>|null $AllowedValues
 */
class ConditionalValidation extends Shape
{
    /**
     * @param array{
     *     MinLength?: int<0, max>|null,
     *     MaxLength?: int<0, max>|null,
     *     Pattern?: string|null,
     *     AllowedValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
