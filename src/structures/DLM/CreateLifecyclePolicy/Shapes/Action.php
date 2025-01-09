<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<CrossRegionCopyAction> $CrossRegionCopy
 */
class Action extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CrossRegionCopy: list<CrossRegionCopyAction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
