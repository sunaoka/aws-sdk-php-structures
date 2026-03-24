<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $body
 * @property 'Text/Plain' $contentType
 */
class CommentUpdateContent extends Shape
{
    /**
     * @param array{
     *     body: string,
     *     contentType: 'Text/Plain'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
