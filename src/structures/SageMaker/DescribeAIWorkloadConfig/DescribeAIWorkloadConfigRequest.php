<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIWorkloadConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIWorkloadConfigName
 */
class DescribeAIWorkloadConfigRequest extends Request
{
    /**
     * @param array{AIWorkloadConfigName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
