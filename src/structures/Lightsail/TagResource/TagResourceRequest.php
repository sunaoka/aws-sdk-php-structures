<?php

namespace Sunaoka\Aws\Structures\Lightsail\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string $resourceArn
 * @property list<Shapes\Tag> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     resourceArn?: string,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
