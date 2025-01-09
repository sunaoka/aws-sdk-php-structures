<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinChoices
 * @property int $MaxChoices
 * @property list<string> $Options
 */
class SelectValidation extends Shape
{
    /**
     * @param array{
     *     MinChoices: int,
     *     MaxChoices: int,
     *     Options: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
