<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $s3OutputEnabled
 * @property string|null $outputS3BucketName
 * @property bool $cloudWatchOutputEnabled
 * @property string|null $cloudWatchLogGroupName
 */
class ConnectorSsmCommandConfig extends Shape
{
    /**
     * @param array{
     *     s3OutputEnabled: bool,
     *     outputS3BucketName?: string|null,
     *     cloudWatchOutputEnabled: bool,
     *     cloudWatchLogGroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
