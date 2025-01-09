<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $environmentIds
 */
class DescribeEnvironmentsRequest extends Request
{
    /**
     * @param array{environmentIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
