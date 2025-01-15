<?php

namespace Sunaoka\Aws\Structures\Ssm\GetResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyId
 * @property string|null $PolicyHash
 * @property string|null $Policy
 */
class GetResourcePoliciesResponseEntry extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string|null,
     *     PolicyHash?: string|null,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
