<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeCustomPlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customPluginArn
 */
class DescribeCustomPluginRequest extends Request
{
    /**
     * @param array{customPluginArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
