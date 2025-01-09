<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudWatchLogGroupName
 * @property bool $cloudWatchOutputEnabled
 * @property string $outputS3BucketName
 * @property bool $s3OutputEnabled
 */
class ConnectorSsmCommandConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogGroupName?: string,
     *     cloudWatchOutputEnabled: bool,
     *     outputS3BucketName?: string,
     *     s3OutputEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
