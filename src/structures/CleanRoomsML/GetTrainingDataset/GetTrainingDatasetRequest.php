<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainingDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainingDatasetArn
 */
class GetTrainingDatasetRequest extends Request
{
    /**
     * @param array{trainingDatasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
