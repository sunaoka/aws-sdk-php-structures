<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ApplicationNames
 */
class DescribeApplicationsRequest extends Request
{
    /**
     * @param array{ApplicationNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
