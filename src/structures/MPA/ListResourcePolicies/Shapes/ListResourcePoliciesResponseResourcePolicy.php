<?php

namespace Sunaoka\Aws\Structures\MPA\ListResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyArn
 * @property 'AWS_MANAGED'|'AWS_RAM'|null $PolicyType
 * @property string|null $PolicyName
 */
class ListResourcePoliciesResponseResourcePolicy extends Shape
{
    /**
     * @param array{
     *     PolicyArn?: string|null,
     *     PolicyType?: 'AWS_MANAGED'|'AWS_RAM'|null,
     *     PolicyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
