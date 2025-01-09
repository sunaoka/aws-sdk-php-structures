<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeSecurityConfigurationRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
