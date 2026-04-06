<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiAgentId
 * @property string $aiAgentArn
 */
class SuggestedMessageReference extends Shape
{
    /**
     * @param array{
     *     aiAgentId: string,
     *     aiAgentArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
