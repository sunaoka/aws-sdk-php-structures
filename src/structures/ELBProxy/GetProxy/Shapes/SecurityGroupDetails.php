<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $securityGroupId
 */
class SecurityGroupDetails extends Shape
{
    /**
     * @param array{securityGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
