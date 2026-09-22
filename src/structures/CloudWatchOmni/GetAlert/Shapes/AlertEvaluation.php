<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $intervalSeconds
 * @property int|null $pendingDurationSeconds
 * @property int|null $recoveryDurationSeconds
 */
class AlertEvaluation extends Shape
{
    /**
     * @param array{
     *     intervalSeconds: int,
     *     pendingDurationSeconds?: int|null,
     *     recoveryDurationSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
