<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property list<Tag> $tags
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
