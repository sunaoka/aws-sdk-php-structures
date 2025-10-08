<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 */
class AutomatedReasoningPolicyIngestContentAnnotation extends Shape
{
    /**
     * @param array{content: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
