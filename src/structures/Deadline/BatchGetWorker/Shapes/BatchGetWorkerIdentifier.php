<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 */
class BatchGetWorkerIdentifier extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
