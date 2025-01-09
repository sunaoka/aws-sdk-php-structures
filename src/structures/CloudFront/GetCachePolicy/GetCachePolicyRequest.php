<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCachePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetCachePolicyRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
