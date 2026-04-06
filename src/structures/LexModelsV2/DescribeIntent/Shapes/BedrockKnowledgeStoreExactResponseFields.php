<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $answerField
 */
class BedrockKnowledgeStoreExactResponseFields extends Shape
{
    /**
     * @param array{answerField?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
