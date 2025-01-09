<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $InstancesToTerminate
 * @property list<string> $InstancesToProtect
 * @property int $InstanceTerminationTimeout
 */
class InstanceResizePolicy extends Shape
{
    /**
     * @param array{
     *     InstancesToTerminate?: list<string>,
     *     InstancesToProtect?: list<string>,
     *     InstanceTerminationTimeout?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
