<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCloudFrontOriginAccessIdentityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetCloudFrontOriginAccessIdentityConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
