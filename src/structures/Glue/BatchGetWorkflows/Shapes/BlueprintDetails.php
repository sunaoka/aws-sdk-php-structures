<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BlueprintName
 * @property string|null $RunId
 */
class BlueprintDetails extends Shape
{
    /**
     * @param array{
     *     BlueprintName?: string|null,
     *     RunId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
