<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeWorkerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workerConfigurationArn
 */
class DescribeWorkerConfigurationRequest extends Request
{
    /**
     * @param array{workerConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
