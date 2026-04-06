<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateLaunchProfileMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityStoreId
 * @property 'USER'|null $persona
 * @property string|null $principalId
 * @property string|null $sid
 */
class LaunchProfileMembership extends Shape
{
    /**
     * @param array{
     *     identityStoreId?: string|null,
     *     persona?: 'USER'|null,
     *     principalId?: string|null,
     *     sid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
