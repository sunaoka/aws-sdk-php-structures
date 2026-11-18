<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExampleCountByFieldCondition>|null $exampleCountByField
 */
class ListDatasetVersionsFilter extends Shape
{
    /**
     * @param array{exampleCountByField?: list<ExampleCountByFieldCondition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
