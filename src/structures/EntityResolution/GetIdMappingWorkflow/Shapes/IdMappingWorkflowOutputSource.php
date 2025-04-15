<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputS3Path
 * @property string|null $KMSArn
 */
class IdMappingWorkflowOutputSource extends Shape
{
    /**
     * @param array{
     *     outputS3Path: string,
     *     KMSArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
