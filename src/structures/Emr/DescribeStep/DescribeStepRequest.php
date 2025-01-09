<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $StepId
 */
class DescribeStepRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     StepId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
