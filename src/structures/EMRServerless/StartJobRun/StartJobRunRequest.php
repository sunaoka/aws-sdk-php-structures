<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $clientToken
 * @property string $executionRoleArn
 * @property Shapes\JobDriver $jobDriver
 * @property Shapes\ConfigurationOverrides $configurationOverrides
 * @property array<string, string> $tags
 * @property int $executionTimeoutMinutes
 * @property string $name
 * @property 'BATCH'|'STREAMING' $mode
 * @property Shapes\RetryPolicy $retryPolicy
 */
class StartJobRunRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken: string,
     *     executionRoleArn: string,
     *     jobDriver?: Shapes\JobDriver,
     *     configurationOverrides?: Shapes\ConfigurationOverrides,
     *     tags?: array<string, string>,
     *     executionTimeoutMinutes?: int,
     *     name?: string,
     *     mode?: 'BATCH'|'STREAMING',
     *     retryPolicy?: Shapes\RetryPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
