<?php

namespace Sunaoka\Aws\Structures\MTurk\ListWorkerBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkerId
 * @property string $Reason
 */
class WorkerBlock extends Shape
{
    /**
     * @param array{
     *     WorkerId?: string,
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
