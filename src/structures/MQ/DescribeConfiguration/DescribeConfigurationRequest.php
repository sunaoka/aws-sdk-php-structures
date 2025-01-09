<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationId
 */
class DescribeConfigurationRequest extends Request
{
    /**
     * @param array{ConfigurationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
