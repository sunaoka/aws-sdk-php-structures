<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 */
class DescribeAutoMLJobRequest extends Request
{
    /**
     * @param array{AutoMLJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
