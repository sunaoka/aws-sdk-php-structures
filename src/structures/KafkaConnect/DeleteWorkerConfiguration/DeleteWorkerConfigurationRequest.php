<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteWorkerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workerConfigurationArn
 */
class DeleteWorkerConfigurationRequest extends Request
{
    /**
     * @param array{workerConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
