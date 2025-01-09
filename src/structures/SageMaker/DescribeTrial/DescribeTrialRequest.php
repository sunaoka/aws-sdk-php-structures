<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialName
 */
class DescribeTrialRequest extends Request
{
    /**
     * @param array{TrialName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
