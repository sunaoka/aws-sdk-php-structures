<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginRequestPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OriginRequestPolicyConfig $OriginRequestPolicyConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateOriginRequestPolicyRequest extends Request
{
    /**
     * @param array{
     *     OriginRequestPolicyConfig: Shapes\OriginRequestPolicyConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
