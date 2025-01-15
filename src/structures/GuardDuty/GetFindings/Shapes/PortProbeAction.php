<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Blocked
 * @property list<PortProbeDetail>|null $PortProbeDetails
 */
class PortProbeAction extends Shape
{
    /**
     * @param array{
     *     Blocked?: bool|null,
     *     PortProbeDetails?: list<PortProbeDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
