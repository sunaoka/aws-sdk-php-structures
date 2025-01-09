<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstanceAccessControlAttributeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 */
class DescribeInstanceAccessControlAttributeConfigurationRequest extends Request
{
    /**
     * @param array{InstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
