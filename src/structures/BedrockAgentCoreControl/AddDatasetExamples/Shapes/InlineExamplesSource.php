<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\AddDatasetExamples\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SensitiveJson> $examples
 */
class InlineExamplesSource extends Shape
{
    /**
     * @param array{examples: list<SensitiveJson>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
