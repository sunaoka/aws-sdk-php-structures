<?php

namespace Sunaoka\Aws\Structures\S3Files\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property list<Shapes\Tag> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
