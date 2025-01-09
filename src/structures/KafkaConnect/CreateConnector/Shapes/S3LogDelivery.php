<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property bool $enabled
 * @property string $prefix
 */
class S3LogDelivery extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     enabled: bool,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
