<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectTagging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tag> $TagSet
 */
class Tagging extends Shape
{
    /**
     * @param array{TagSet: list<Tag>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
