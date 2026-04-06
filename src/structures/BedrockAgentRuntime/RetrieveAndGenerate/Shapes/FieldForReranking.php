<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldName
 */
class FieldForReranking extends Shape
{
    /**
     * @param array{fieldName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
