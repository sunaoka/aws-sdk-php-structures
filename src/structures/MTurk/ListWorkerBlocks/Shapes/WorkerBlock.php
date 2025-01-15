<?php

namespace Sunaoka\Aws\Structures\MTurk\ListWorkerBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkerId
 * @property string|null $Reason
 */
class WorkerBlock extends Shape
{
    /**
     * @param array{
     *     WorkerId?: string|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
