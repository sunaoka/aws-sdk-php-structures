<?php

namespace Sunaoka\Aws\Structures\RAM\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property list<Shapes\Tag> $tags
 * @property string $resourceArn
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn?: string,
     *     tags: list<Shapes\Tag>,
     *     resourceArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
