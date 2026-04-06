<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeIdentityProviderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property int<1, 3653>|null $LifetimeInDays
 */
class PersonalAccessTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'ACTIVE'|'INACTIVE',
     *     LifetimeInDays?: int<1, 3653>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
