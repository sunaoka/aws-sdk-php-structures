<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3BucketName
 * @property string|null $cloudWatchLogGroupArn
 * @property string|null $logSchemaVersion
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     s3BucketName?: string|null,
     *     cloudWatchLogGroupArn?: string|null,
     *     logSchemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
