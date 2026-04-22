<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecycleConfiguration|null $lifecycleConfiguration
 * @property NetworkConfiguration|null $networkConfiguration
 * @property list<FilesystemConfiguration>|null $filesystemConfigurations
 */
class HarnessAgentCoreRuntimeEnvironmentRequest extends Shape
{
    /**
     * @param array{
     *     lifecycleConfiguration?: LifecycleConfiguration|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     filesystemConfigurations?: list<FilesystemConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
