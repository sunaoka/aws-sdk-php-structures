<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenXJsonSerDe|null $OpenXJsonSerDe
 * @property HiveJsonSerDe|null $HiveJsonSerDe
 */
class Deserializer extends Shape
{
    /**
     * @param array{
     *     OpenXJsonSerDe?: OpenXJsonSerDe|null,
     *     HiveJsonSerDe?: HiveJsonSerDe|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
