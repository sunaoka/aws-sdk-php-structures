<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Privileged
 * @property bool $AllowPrivilegeEscalation
 */
class SecurityContext extends Shape
{
    /**
     * @param array{
     *     Privileged?: bool,
     *     AllowPrivilegeEscalation?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
