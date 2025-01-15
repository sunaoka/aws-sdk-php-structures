<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KMSArn
 * @property string $outputS3Path
 */
class IdMappingWorkflowOutputSource extends Shape
{
    /**
     * @param array{
     *     KMSArn?: string|null,
     *     outputS3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
