<?php

namespace Sunaoka\Aws\Structures\Inspector\SetTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\Tag>|null $tags
 */
class SetTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
