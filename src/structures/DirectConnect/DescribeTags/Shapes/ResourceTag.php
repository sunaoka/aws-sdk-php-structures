<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 * @property list<Tag>|null $tags
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
