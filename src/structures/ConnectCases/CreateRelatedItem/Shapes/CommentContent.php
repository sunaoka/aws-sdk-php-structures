<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $body
 * @property 'Text/Plain' $contentType
 */
class CommentContent extends Shape
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
