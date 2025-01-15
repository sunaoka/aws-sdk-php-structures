<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PortProbeDetail>|null $PortProbeDetails
 * @property bool|null $Blocked
 */
class PortProbeAction extends Shape
{
    /**
     * @param array{
     *     PortProbeDetails?: list<PortProbeDetail>|null,
     *     Blocked?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
