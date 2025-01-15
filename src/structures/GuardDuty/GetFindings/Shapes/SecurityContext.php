<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Privileged
 * @property bool|null $AllowPrivilegeEscalation
 */
class SecurityContext extends Shape
{
    /**
     * @param array{
     *     Privileged?: bool|null,
     *     AllowPrivilegeEscalation?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
