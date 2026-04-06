<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mwaaEnvironmentName
 */
class WorkflowsMwaaPropertiesOutput extends Shape
{
    /**
     * @param array{mwaaEnvironmentName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
