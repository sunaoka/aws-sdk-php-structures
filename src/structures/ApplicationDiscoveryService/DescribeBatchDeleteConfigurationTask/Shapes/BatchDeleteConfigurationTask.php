<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property 'INITIALIZING'|'VALIDATING'|'DELETING'|'COMPLETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'SERVER' $configurationType
 * @property list<string> $requestedConfigurations
 * @property list<string> $deletedConfigurations
 * @property list<FailedConfiguration> $failedConfigurations
 * @property list<DeletionWarning> $deletionWarnings
 */
class BatchDeleteConfigurationTask extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     status?: 'INITIALIZING'|'VALIDATING'|'DELETING'|'COMPLETED'|'FAILED',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     configurationType?: 'SERVER',
     *     requestedConfigurations?: list<string>,
     *     deletedConfigurations?: list<string>,
     *     failedConfigurations?: list<FailedConfiguration>,
     *     deletionWarnings?: list<DeletionWarning>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
