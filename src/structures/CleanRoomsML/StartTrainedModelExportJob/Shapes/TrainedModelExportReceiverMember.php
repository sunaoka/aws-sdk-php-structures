<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 */
class TrainedModelExportReceiverMember extends Shape
{
    /**
     * @param array{accountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
