<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DescribeSecurityConfigurationRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
