<?php

namespace Sunaoka\Aws\Structures\Detective\DescribeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 */
class DescribeOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{GraphArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
