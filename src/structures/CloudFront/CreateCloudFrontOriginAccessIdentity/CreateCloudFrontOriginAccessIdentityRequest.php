<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCloudFrontOriginAccessIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CloudFrontOriginAccessIdentityConfig $CloudFrontOriginAccessIdentityConfig
 */
class CreateCloudFrontOriginAccessIdentityRequest extends Request
{
    /**
     * @param array{CloudFrontOriginAccessIdentityConfig: Shapes\CloudFrontOriginAccessIdentityConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
