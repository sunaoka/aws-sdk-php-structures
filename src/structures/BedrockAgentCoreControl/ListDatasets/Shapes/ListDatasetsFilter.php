<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExampleCountByFieldCondition>|null $exampleCountByField
 */
class ListDatasetsFilter extends Shape
{
    /**
     * @param array{exampleCountByField?: list<ExampleCountByFieldCondition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
