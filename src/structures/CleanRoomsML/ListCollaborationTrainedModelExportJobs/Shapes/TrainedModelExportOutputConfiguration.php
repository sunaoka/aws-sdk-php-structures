<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModelExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TrainedModelExportReceiverMember> $members
 */
class TrainedModelExportOutputConfiguration extends Shape
{
    /**
     * @param array{members: list<TrainedModelExportReceiverMember>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
