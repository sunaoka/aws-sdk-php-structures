<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdminUsername
 * @property string $CaEndpoint
 */
class MemberFabricAttributes extends Shape
{
    /**
     * @param array{
     *     AdminUsername?: string,
     *     CaEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
