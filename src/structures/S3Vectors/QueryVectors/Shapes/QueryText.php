<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property string $metadataKey
 */
class QueryText extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     metadataKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
