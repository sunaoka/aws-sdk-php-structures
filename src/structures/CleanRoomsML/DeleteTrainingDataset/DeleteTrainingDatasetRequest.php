<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteTrainingDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainingDatasetArn
 */
class DeleteTrainingDatasetRequest extends Request
{
    /**
     * @param array{trainingDatasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
