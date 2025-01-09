<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeIdentityProviderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property int<1, 3653> $LifetimeInDays
 */
class PersonalAccessTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'ACTIVE'|'INACTIVE',
     *     LifetimeInDays?: int<1, 3653>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
