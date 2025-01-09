<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamId
 * @property string $streamArn
 * @property int<0, 65535> $streamVersion
 * @property string $description
 * @property list<StreamFile> $files
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $roleArn
 */
class StreamInfo extends Shape
{
    /**
     * @param array{
     *     streamId?: string,
     *     streamArn?: string,
     *     streamVersion?: int<0, 65535>,
     *     description?: string,
     *     files?: list<StreamFile>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
