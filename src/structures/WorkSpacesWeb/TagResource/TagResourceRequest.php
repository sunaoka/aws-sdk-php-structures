<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $resourceArn
 * @property list<Shapes\Tag> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     resourceArn: string,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
