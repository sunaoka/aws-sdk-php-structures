<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentRuntimeArn
 * @property string $agentRuntimeName
 * @property string $agentRuntimeId
 * @property LifecycleConfiguration $lifecycleConfiguration
 * @property NetworkConfiguration $networkConfiguration
 * @property list<FilesystemConfiguration>|null $filesystemConfigurations
 */
class HarnessAgentCoreRuntimeEnvironment extends Shape
{
    /**
     * @param array{
     *     agentRuntimeArn: string,
     *     agentRuntimeName: string,
     *     agentRuntimeId: string,
     *     lifecycleConfiguration: LifecycleConfiguration,
     *     networkConfiguration: NetworkConfiguration,
     *     filesystemConfigurations?: list<FilesystemConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
