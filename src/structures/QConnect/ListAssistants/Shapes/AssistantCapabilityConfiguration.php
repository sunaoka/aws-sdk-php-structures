<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAssistants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'V1'|'V2'|null $type
 */
class AssistantCapabilityConfiguration extends Shape
{
    /**
     * @param array{type?: 'V1'|'V2'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
