<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkforce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkforceName
 */
class DescribeWorkforceRequest extends Request
{
    /**
     * @param array{WorkforceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
