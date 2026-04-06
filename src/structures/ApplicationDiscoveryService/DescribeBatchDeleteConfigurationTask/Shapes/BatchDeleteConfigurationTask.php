<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property 'INITIALIZING'|'VALIDATING'|'DELETING'|'COMPLETED'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'SERVER'|null $configurationType
 * @property list<string>|null $requestedConfigurations
 * @property list<string>|null $deletedConfigurations
 * @property list<FailedConfiguration>|null $failedConfigurations
 * @property list<DeletionWarning>|null $deletionWarnings
 */
class BatchDeleteConfigurationTask extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     status?: 'INITIALIZING'|'VALIDATING'|'DELETING'|'COMPLETED'|'FAILED'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     configurationType?: 'SERVER'|null,
     *     requestedConfigurations?: list<string>|null,
     *     deletedConfigurations?: list<string>|null,
     *     failedConfigurations?: list<FailedConfiguration>|null,
     *     deletionWarnings?: list<DeletionWarning>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
