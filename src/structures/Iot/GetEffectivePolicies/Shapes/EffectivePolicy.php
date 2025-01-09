<?php

namespace Sunaoka\Aws\Structures\Iot\GetEffectivePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyName
 * @property string $policyArn
 * @property string $policyDocument
 */
class EffectivePolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string,
     *     policyArn?: string,
     *     policyDocument?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
