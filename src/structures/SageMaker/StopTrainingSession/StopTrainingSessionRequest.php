<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopTrainingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingSessionName
 */
class StopTrainingSessionRequest extends Request
{
    /**
     * @param array{TrainingSessionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
