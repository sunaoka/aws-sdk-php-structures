<?php

namespace Sunaoka\Aws\Structures\Lightsail\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 * @property string|null $resourceArn
 * @property list<Shapes\Tag> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceName: string,
     *     resourceArn?: string|null,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
