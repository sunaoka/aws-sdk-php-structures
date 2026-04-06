<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinLength
 * @property int $MaxLength
 * @property string $Pattern
 */
class TextValidation extends Shape
{
    /**
     * @param array{
     *     MinLength: int,
     *     MaxLength: int,
     *     Pattern: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
