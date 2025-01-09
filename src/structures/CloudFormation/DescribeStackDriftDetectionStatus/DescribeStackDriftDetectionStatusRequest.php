<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackDriftDetectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackDriftDetectionId
 */
class DescribeStackDriftDetectionStatusRequest extends Request
{
    /**
     * @param array{StackDriftDetectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
