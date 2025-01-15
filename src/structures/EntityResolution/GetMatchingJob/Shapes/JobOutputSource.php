<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KMSArn
 * @property string $outputS3Path
 * @property string $roleArn
 */
class JobOutputSource extends Shape
{
    /**
     * @param array{
     *     KMSArn?: string|null,
     *     outputS3Path: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
