<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property bool $enabled
 * @property string|null $prefix
 */
class S3LogDelivery extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     enabled: bool,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
