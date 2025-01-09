<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateResponseHeadersPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResponseHeadersPolicyConfig $ResponseHeadersPolicyConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateResponseHeadersPolicyRequest extends Request
{
    /**
     * @param array{
     *     ResponseHeadersPolicyConfig: Shapes\ResponseHeadersPolicyConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
