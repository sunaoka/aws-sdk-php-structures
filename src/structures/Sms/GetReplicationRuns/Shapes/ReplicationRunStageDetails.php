<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stage
 * @property string|null $stageProgress
 */
class ReplicationRunStageDetails extends Shape
{
    /**
     * @param array{
     *     stage?: string|null,
     *     stageProgress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
