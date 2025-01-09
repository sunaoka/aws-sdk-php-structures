<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kendraIndexArn
 */
class KendraKnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{kendraIndexArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
