<?php

namespace Sunaoka\Aws\Structures\Kms\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property list<Shapes\Tag> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
