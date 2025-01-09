<?php

namespace Sunaoka\Aws\Structures\AppMesh\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\TagRef> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     tags: list<Shapes\TagRef>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
