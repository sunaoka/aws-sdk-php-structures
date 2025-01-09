<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrialComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialComponentName
 */
class DescribeTrialComponentRequest extends Request
{
    /**
     * @param array{TrialComponentName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
