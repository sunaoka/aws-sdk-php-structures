<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 */
class FilterDefinition extends Shape
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
