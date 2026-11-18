<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetExamples\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $generationIds
 * @property list<ExampleFieldCondition>|null $exampleFields
 */
class ListDatasetExamplesFilter extends Shape
{
    /**
     * @param array{
     *     generationIds?: list<string>|null,
     *     exampleFields?: list<ExampleFieldCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
