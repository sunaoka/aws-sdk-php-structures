<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdminUsername
 * @property string|null $CaEndpoint
 */
class MemberFabricAttributes extends Shape
{
    /**
     * @param array{
     *     AdminUsername?: string|null,
     *     CaEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
