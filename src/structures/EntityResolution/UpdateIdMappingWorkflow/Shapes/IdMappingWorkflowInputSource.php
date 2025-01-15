<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string|null $schemaName
 * @property 'SOURCE'|'TARGET'|null $type
 */
class IdMappingWorkflowInputSource extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     schemaName?: string|null,
     *     type?: 'SOURCE'|'TARGET'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
