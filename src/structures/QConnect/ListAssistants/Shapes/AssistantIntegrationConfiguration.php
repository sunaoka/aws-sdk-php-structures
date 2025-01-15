<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAssistants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $topicIntegrationArn
 */
class AssistantIntegrationConfiguration extends Shape
{
    /**
     * @param array{topicIntegrationArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
