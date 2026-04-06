<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 */
class DescribeBatchDeleteConfigurationTaskRequest extends Request
{
    /**
     * @param array{taskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
