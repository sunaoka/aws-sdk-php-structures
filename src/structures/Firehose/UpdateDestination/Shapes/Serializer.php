<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ParquetSerDe|null $ParquetSerDe
 * @property OrcSerDe|null $OrcSerDe
 */
class Serializer extends Shape
{
    /**
     * @param array{
     *     ParquetSerDe?: ParquetSerDe|null,
     *     OrcSerDe?: OrcSerDe|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
