<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $clientToken
 * @property string $executionRoleArn
 * @property Shapes\JobRunExecutionIamPolicy|null $executionIamPolicy
 * @property Shapes\JobDriver|null $jobDriver
 * @property Shapes\ConfigurationOverrides|null $configurationOverrides
 * @property array<string, string>|null $tags
 * @property int<0, 1000000>|null $executionTimeoutMinutes
 * @property string|null $name
 * @property 'BATCH'|'STREAMING'|null $mode
 * @property Shapes\RetryPolicy|null $retryPolicy
 */
class StartJobRunRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken: string,
     *     executionRoleArn: string,
     *     executionIamPolicy?: Shapes\JobRunExecutionIamPolicy|null,
     *     jobDriver?: Shapes\JobDriver|null,
     *     configurationOverrides?: Shapes\ConfigurationOverrides|null,
     *     tags?: array<string, string>|null,
     *     executionTimeoutMinutes?: int<0, 1000000>|null,
     *     name?: string|null,
     *     mode?: 'BATCH'|'STREAMING'|null,
     *     retryPolicy?: Shapes\RetryPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
