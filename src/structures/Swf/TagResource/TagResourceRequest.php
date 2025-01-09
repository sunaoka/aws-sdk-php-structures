<?php

namespace Sunaoka\Aws\Structures\Swf\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\ResourceTag> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     tags: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
