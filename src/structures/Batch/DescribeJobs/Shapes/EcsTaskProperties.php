<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskContainerProperties> $containers
 * @property EphemeralStorage|null $ephemeralStorage
 * @property string|null $executionRoleArn
 * @property string|null $platformVersion
 * @property string|null $ipcMode
 * @property string|null $taskRoleArn
 * @property string|null $pidMode
 * @property NetworkConfiguration|null $networkConfiguration
 * @property RuntimePlatform|null $runtimePlatform
 * @property list<Volume>|null $volumes
 * @property bool|null $enableExecuteCommand
 */
class EcsTaskProperties extends Shape
{
    /**
     * @param array{
     *     containers: list<TaskContainerProperties>,
     *     ephemeralStorage?: EphemeralStorage|null,
     *     executionRoleArn?: string|null,
     *     platformVersion?: string|null,
     *     ipcMode?: string|null,
     *     taskRoleArn?: string|null,
     *     pidMode?: string|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     runtimePlatform?: RuntimePlatform|null,
     *     volumes?: list<Volume>|null,
     *     enableExecuteCommand?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
