<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartBatchDeleteConfigurationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SERVER' $configurationType
 * @property list<string> $configurationIds
 */
class StartBatchDeleteConfigurationTaskRequest extends Request
{
    /**
     * @param array{
     *     configurationType: 'SERVER',
     *     configurationIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
