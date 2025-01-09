<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BlueprintName
 * @property string $RunId
 */
class BlueprintDetails extends Shape
{
    /**
     * @param array{
     *     BlueprintName?: string,
     *     RunId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
