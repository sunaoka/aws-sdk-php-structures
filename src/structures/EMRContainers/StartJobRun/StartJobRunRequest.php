<?php

namespace Sunaoka\Aws\Structures\EMRContainers\StartJobRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string $virtualClusterId
 * @property string $clientToken
 * @property string|null $executionRoleArn
 * @property string|null $releaseLabel
 * @property Shapes\JobDriver|null $jobDriver
 * @property Shapes\ConfigurationOverrides|null $configurationOverrides
 * @property array<string, string>|null $tags
 * @property string|null $jobTemplateId
 * @property array<string, string>|null $jobTemplateParameters
 * @property Shapes\RetryPolicyConfiguration|null $retryPolicyConfiguration
 */
class StartJobRunRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     virtualClusterId: string,
     *     clientToken: string,
     *     executionRoleArn?: string|null,
     *     releaseLabel?: string|null,
     *     jobDriver?: Shapes\JobDriver|null,
     *     configurationOverrides?: Shapes\ConfigurationOverrides|null,
     *     tags?: array<string, string>|null,
     *     jobTemplateId?: string|null,
     *     jobTemplateParameters?: array<string, string>|null,
     *     retryPolicyConfiguration?: Shapes\RetryPolicyConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
