<?php

namespace Sunaoka\Aws\Structures\Ssm\GetResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $PolicyHash
 * @property string $Policy
 */
class GetResourcePoliciesResponseEntry extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string,
     *     PolicyHash?: string,
     *     Policy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
