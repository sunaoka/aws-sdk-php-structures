<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskContainerDetails> $containers
 * @property string $containerInstanceArn
 * @property string $taskArn
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
class EcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     containers?: list<TaskContainerDetails>,
     *     containerInstanceArn?: string,
     *     taskArn?: string,
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
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
