<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutIdentityProviderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property int $LifetimeInDays
 */
class PersonalAccessTokenConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'ACTIVE'|'INACTIVE',
     *     LifetimeInDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
