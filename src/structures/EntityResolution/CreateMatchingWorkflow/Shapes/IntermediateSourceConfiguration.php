<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intermediateS3Path
 */
class IntermediateSourceConfiguration extends Shape
{
    /**
     * @param array{intermediateS3Path: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
