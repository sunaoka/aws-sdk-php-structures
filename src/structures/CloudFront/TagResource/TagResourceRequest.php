<?php

namespace Sunaoka\Aws\Structures\CloudFront\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property Shapes\Tags $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     Tags: Shapes\Tags
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
