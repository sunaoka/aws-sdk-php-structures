<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionName
 */
class DescribeActionRequest extends Request
{
    /**
     * @param array{ActionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
