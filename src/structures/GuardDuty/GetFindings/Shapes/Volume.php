<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property HostPath|null $HostPath
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     HostPath?: HostPath|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
