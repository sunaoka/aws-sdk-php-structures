<?php

namespace Sunaoka\Aws\Structures\MediaStore\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property list<Shapes\Tag> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
