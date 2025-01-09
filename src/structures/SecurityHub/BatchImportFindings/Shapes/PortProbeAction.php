<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PortProbeDetail> $PortProbeDetails
 * @property bool $Blocked
 */
class PortProbeAction extends Shape
{
    /**
     * @param array{
     *     PortProbeDetails?: list<PortProbeDetail>,
     *     Blocked?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
