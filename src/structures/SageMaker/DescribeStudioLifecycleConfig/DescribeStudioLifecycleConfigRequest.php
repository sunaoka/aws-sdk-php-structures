<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeStudioLifecycleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioLifecycleConfigName
 */
class DescribeStudioLifecycleConfigRequest extends Request
{
    /**
     * @param array{StudioLifecycleConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
