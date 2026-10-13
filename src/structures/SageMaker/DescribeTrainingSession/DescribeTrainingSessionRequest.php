<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingSessionName
 */
class DescribeTrainingSessionRequest extends Request
{
    /**
     * @param array{TrainingSessionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
