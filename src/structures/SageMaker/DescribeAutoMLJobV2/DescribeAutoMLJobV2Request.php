<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 */
class DescribeAutoMLJobV2Request extends Request
{
    /**
     * @param array{AutoMLJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
