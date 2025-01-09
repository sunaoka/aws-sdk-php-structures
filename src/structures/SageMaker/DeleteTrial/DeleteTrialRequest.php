<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialName
 */
class DeleteTrialRequest extends Request
{
    /**
     * @param array{TrialName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
