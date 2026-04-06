<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cloudWatchLogGroupName
 * @property bool $cloudWatchOutputEnabled
 * @property string|null $outputS3BucketName
 * @property bool $s3OutputEnabled
 */
class ConnectorSsmCommandConfig extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogGroupName?: string|null,
     *     cloudWatchOutputEnabled: bool,
     *     outputS3BucketName?: string|null,
     *     s3OutputEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
