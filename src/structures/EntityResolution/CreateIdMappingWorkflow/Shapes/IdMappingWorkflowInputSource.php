<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string $schemaName
 * @property 'SOURCE'|'TARGET' $type
 */
class IdMappingWorkflowInputSource extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     schemaName?: string,
     *     type?: 'SOURCE'|'TARGET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
