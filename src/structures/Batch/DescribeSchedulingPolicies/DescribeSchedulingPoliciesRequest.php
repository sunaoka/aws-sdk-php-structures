<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeSchedulingPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $arns
 */
class DescribeSchedulingPoliciesRequest extends Request
{
    /**
     * @param array{arns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
