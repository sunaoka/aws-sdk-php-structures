<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeAccountLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class DescribeAccountLimitsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
