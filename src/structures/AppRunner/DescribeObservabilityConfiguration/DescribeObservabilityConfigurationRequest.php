<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeObservabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ObservabilityConfigurationArn
 */
class DescribeObservabilityConfigurationRequest extends Request
{
    /**
     * @param array{ObservabilityConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
