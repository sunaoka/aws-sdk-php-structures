<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateResponseHeadersPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResponseHeadersPolicyConfig $ResponseHeadersPolicyConfig
 */
class CreateResponseHeadersPolicyRequest extends Request
{
    /**
     * @param array{ResponseHeadersPolicyConfig: Shapes\ResponseHeadersPolicyConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
