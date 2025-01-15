<?php

namespace Sunaoka\Aws\Structures\RAM\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $resourceShareArn
 * @property list<Shapes\Tag> $tags
 * @property string|null $resourceArn
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn?: string|null,
     *     tags: list<Shapes\Tag>,
     *     resourceArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
