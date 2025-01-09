<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetResponseHeadersPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetResponseHeadersPolicyRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
