<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $InstancesToTerminate
 * @property list<string>|null $InstancesToProtect
 * @property int|null $InstanceTerminationTimeout
 */
class InstanceResizePolicy extends Shape
{
    /**
     * @param array{
     *     InstancesToTerminate?: list<string>|null,
     *     InstancesToProtect?: list<string>|null,
     *     InstanceTerminationTimeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
