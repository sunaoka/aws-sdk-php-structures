<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\Tag> $tags
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
