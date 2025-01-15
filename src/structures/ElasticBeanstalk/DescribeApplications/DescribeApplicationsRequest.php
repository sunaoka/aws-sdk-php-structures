<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ApplicationNames
 */
class DescribeApplicationsRequest extends Request
{
    /**
     * @param array{ApplicationNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
