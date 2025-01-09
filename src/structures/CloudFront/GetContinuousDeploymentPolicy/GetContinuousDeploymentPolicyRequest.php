<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetContinuousDeploymentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetContinuousDeploymentPolicyRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
