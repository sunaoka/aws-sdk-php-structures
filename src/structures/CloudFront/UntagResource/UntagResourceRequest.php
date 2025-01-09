<?php

namespace Sunaoka\Aws\Structures\CloudFront\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property Shapes\TagKeys $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     TagKeys: Shapes\TagKeys
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
