<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskContainerProperties> $containers
 * @property EphemeralStorage $ephemeralStorage
 * @property string $executionRoleArn
 * @property string $platformVersion
 * @property string $ipcMode
 * @property string $taskRoleArn
 * @property string $pidMode
 * @property NetworkConfiguration $networkConfiguration
 * @property RuntimePlatform $runtimePlatform
 * @property list<Volume> $volumes
 */
class EcsTaskProperties extends Shape
{
    /**
     * @param array{
     *     containers: list<TaskContainerProperties>,
     *     ephemeralStorage?: EphemeralStorage,
     *     executionRoleArn?: string,
     *     platformVersion?: string,
     *     ipcMode?: string,
     *     taskRoleArn?: string,
     *     pidMode?: string,
     *     networkConfiguration?: NetworkConfiguration,
     *     runtimePlatform?: RuntimePlatform,
     *     volumes?: list<Volume>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
