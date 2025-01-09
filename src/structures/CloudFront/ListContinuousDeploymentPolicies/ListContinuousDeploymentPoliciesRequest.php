<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListContinuousDeploymentPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 */
class ListContinuousDeploymentPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
