<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $streamId
 * @property string|null $streamArn
 * @property int<0, 65535>|null $streamVersion
 * @property string|null $description
 * @property list<StreamFile>|null $files
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $roleArn
 */
class StreamInfo extends Shape
{
    /**
     * @param array{
     *     streamId?: string|null,
     *     streamArn?: string|null,
     *     streamVersion?: int<0, 65535>|null,
     *     description?: string|null,
     *     files?: list<StreamFile>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
