<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdminUsername
 * @property string $AdminPassword
 */
class MemberFabricConfiguration extends Shape
{
    /**
     * @param array{
     *     AdminUsername: string,
     *     AdminPassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
