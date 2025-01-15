<?php

namespace Sunaoka\Aws\Structures\Iot\GetEffectivePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property string|null $policyArn
 * @property string|null $policyDocument
 */
class EffectivePolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyArn?: string|null,
     *     policyDocument?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
