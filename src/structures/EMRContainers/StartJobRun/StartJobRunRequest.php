<?php

namespace Sunaoka\Aws\Structures\EMRContainers\StartJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $virtualClusterId
 * @property string $clientToken
 * @property string $executionRoleArn
 * @property string $releaseLabel
 * @property Shapes\JobDriver $jobDriver
 * @property Shapes\ConfigurationOverrides $configurationOverrides
 * @property array<string, string> $tags
 * @property string $jobTemplateId
 * @property array<string, string> $jobTemplateParameters
 * @property Shapes\RetryPolicyConfiguration $retryPolicyConfiguration
 */
class StartJobRunRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     virtualClusterId: string,
     *     clientToken: string,
     *     executionRoleArn?: string,
     *     releaseLabel?: string,
     *     jobDriver?: Shapes\JobDriver,
     *     configurationOverrides?: Shapes\ConfigurationOverrides,
     *     tags?: array<string, string>,
     *     jobTemplateId?: string,
     *     jobTemplateParameters?: array<string, string>,
     *     retryPolicyConfiguration?: Shapes\RetryPolicyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
