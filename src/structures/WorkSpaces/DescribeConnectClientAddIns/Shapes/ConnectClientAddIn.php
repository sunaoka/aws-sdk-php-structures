<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectClientAddIns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddInId
 * @property string|null $ResourceId
 * @property string|null $Name
 * @property string|null $URL
 */
class ConnectClientAddIn extends Shape
{
    /**
     * @param array{
     *     AddInId?: string|null,
     *     ResourceId?: string|null,
     *     Name?: string|null,
     *     URL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
