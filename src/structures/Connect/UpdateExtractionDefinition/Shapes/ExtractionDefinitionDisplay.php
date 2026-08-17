<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateExtractionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 */
class ExtractionDefinitionDisplay extends Shape
{
    /**
     * @param array{Label?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
