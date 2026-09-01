<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConditionalRule> $Rules
 * @property string $DefaultBehavior
 */
class ConditionalBehavior extends Shape
{
    /**
     * @param array{
     *     Rules: list<ConditionalRule>,
     *     DefaultBehavior: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
