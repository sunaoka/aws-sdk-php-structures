<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModelInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 */
class InferenceReceiverMember extends Shape
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
