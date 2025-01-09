<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class FilterDefinition extends Shape
{
    /**
     * @param array{Name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
