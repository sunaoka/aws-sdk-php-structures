<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetContinuousDeploymentPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Header
 * @property string $Value
 */
class ContinuousDeploymentSingleHeaderConfig extends Shape
{
    /**
     * @param array{
     *     Header: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
