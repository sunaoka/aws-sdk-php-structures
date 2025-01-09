<?php

namespace Sunaoka\Aws\Structures\Sms\GetReplicationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stage
 * @property string $stageProgress
 */
class ReplicationRunStageDetails extends Shape
{
    /**
     * @param array{
     *     stage?: string,
     *     stageProgress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
