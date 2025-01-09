<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetOriginRequestPolicyRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
