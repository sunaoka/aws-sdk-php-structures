<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateContinuousDeploymentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ContinuousDeploymentPolicyConfig $ContinuousDeploymentPolicyConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateContinuousDeploymentPolicyRequest extends Request
{
    /**
     * @param array{
     *     ContinuousDeploymentPolicyConfig: Shapes\ContinuousDeploymentPolicyConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
