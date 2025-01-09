<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCloudFrontOriginAccessIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CloudFrontOriginAccessIdentityConfig $CloudFrontOriginAccessIdentityConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateCloudFrontOriginAccessIdentityRequest extends Request
{
    /**
     * @param array{
     *     CloudFrontOriginAccessIdentityConfig: Shapes\CloudFrontOriginAccessIdentityConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
