<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockPublicAccess $BlockPublicAccess
 */
class AccountLevelPermissions extends Shape
{
    /**
     * @param array{BlockPublicAccess?: BlockPublicAccess} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
