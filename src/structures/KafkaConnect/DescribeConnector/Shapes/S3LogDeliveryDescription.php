<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property bool|null $enabled
 * @property string|null $prefix
 */
class S3LogDeliveryDescription extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     enabled?: bool|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
