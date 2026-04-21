<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAIWorkloadConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIWorkloadConfigName
 */
class DeleteAIWorkloadConfigRequest extends Request
{
    /**
     * @param array{AIWorkloadConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
