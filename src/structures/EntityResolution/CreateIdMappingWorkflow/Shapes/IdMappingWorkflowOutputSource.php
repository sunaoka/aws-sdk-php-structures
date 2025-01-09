<?php

namespace Sunaoka\Aws\Structures\EntityResolution\CreateIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSArn
 * @property string $outputS3Path
 */
class IdMappingWorkflowOutputSource extends Shape
{
    /**
     * @param array{
     *     KMSArn?: string,
     *     outputS3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
