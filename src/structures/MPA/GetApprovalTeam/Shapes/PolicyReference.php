<?php

namespace Sunaoka\Aws\Structures\MPA\GetApprovalTeam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyArn
 */
class PolicyReference extends Shape
{
    /**
     * @param array{PolicyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
