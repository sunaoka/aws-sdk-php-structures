<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{Resource: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
