<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicyConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetResponseHeadersPolicyConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
