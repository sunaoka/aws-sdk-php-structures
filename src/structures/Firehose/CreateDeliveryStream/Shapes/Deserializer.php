<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenXJsonSerDe $OpenXJsonSerDe
 * @property HiveJsonSerDe $HiveJsonSerDe
 */
class Deserializer extends Shape
{
    /**
     * @param array{
     *     OpenXJsonSerDe?: OpenXJsonSerDe,
     *     HiveJsonSerDe?: HiveJsonSerDe
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
