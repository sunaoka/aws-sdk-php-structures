<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateOriginRequestPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OriginRequestPolicyConfig $OriginRequestPolicyConfig
 */
class CreateOriginRequestPolicyRequest extends Request
{
    /**
     * @param array{OriginRequestPolicyConfig: Shapes\OriginRequestPolicyConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
