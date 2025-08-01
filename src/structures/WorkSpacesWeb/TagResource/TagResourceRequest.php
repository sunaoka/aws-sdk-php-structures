<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\Tag> $tags
 * @property string|null $clientToken
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     tags: list<Shapes\Tag>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
