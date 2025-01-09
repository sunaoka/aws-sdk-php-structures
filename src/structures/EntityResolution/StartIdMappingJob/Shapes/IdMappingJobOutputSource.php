<?php

namespace Sunaoka\Aws\Structures\EntityResolution\StartIdMappingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSArn
 * @property string $outputS3Path
 * @property string $roleArn
 */
class IdMappingJobOutputSource extends Shape
{
    /**
     * @param array{
     *     KMSArn?: string,
     *     outputS3Path: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
