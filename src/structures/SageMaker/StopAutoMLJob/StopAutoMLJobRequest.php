<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopAutoMLJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 */
class StopAutoMLJobRequest extends Request
{
    /**
     * @param array{AutoMLJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
