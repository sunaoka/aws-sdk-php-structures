<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BRANCH'|'TAG'|'COMMIT' $type
 * @property string $value
 */
class SourceReference extends Shape
{
    /**
     * @param array{
     *     type: 'BRANCH'|'TAG'|'COMMIT',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
