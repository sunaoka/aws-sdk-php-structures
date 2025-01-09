<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Blocked
 * @property list<PortProbeDetail> $PortProbeDetails
 */
class PortProbeAction extends Shape
{
    /**
     * @param array{
     *     Blocked?: bool,
     *     PortProbeDetails?: list<PortProbeDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
