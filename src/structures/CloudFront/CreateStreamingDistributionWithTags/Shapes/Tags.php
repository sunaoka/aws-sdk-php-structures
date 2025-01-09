<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Tag> $Items
 */
class Tags extends Shape
{
    /**
     * @param array{Items?: list<Tag>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
