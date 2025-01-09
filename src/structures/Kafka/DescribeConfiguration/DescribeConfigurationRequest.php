<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DescribeConfigurationRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
