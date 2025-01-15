<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property string|null $policyArn
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
