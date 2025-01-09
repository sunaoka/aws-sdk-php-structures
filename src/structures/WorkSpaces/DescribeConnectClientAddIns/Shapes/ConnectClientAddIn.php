<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectClientAddIns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddInId
 * @property string $ResourceId
 * @property string $Name
 * @property string $URL
 */
class ConnectClientAddIn extends Shape
{
    /**
     * @param array{
     *     AddInId?: string,
     *     ResourceId?: string,
     *     Name?: string,
     *     URL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
