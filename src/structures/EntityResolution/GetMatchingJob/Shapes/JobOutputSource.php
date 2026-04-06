<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $outputS3Path
 * @property string|null $KMSArn
 */
class JobOutputSource extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     outputS3Path: string,
     *     KMSArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
