<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrainingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingSessionName
 */
class DeleteTrainingSessionRequest extends Request
{
    /**
     * @param array{TrainingSessionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
