<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicyConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetOriginRequestPolicyConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
