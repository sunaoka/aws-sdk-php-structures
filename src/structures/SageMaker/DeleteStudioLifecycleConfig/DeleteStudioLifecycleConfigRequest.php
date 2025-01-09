<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteStudioLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioLifecycleConfigName
 */
class DeleteStudioLifecycleConfigRequest extends Request
{
    /**
     * @param array{StudioLifecycleConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
