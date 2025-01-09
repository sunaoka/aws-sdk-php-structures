<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCloudFrontOriginAccessIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetCloudFrontOriginAccessIdentityRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
