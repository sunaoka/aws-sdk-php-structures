<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrialComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 */
class DeleteTrialComponentRequest extends Request
{
    /**
     * @param array{TrialComponentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
