<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAssistantAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'V1'|'V2' $type
 */
class AssistantCapabilityConfiguration extends Shape
{
    /**
     * @param array{type?: 'V1'|'V2'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
