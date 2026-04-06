<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskContainerDetails>|null $containers
 * @property string|null $containerInstanceArn
 * @property string|null $taskArn
 * @property EphemeralStorage|null $ephemeralStorage
 * @property string|null $executionRoleArn
 * @property string|null $platformVersion
 * @property string|null $ipcMode
 * @property string|null $taskRoleArn
 * @property string|null $pidMode
 * @property NetworkConfiguration|null $networkConfiguration
 * @property RuntimePlatform|null $runtimePlatform
 * @property list<Volume>|null $volumes
 */
class EcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     containers?: list<TaskContainerDetails>|null,
     *     containerInstanceArn?: string|null,
     *     taskArn?: string|null,
     *     ephemeralStorage?: EphemeralStorage|null,
     *     executionRoleArn?: string|null,
     *     platformVersion?: string|null,
     *     ipcMode?: string|null,
     *     taskRoleArn?: string|null,
     *     pidMode?: string|null,
     *     networkConfiguration?: NetworkConfiguration|null,
     *     runtimePlatform?: RuntimePlatform|null,
     *     volumes?: list<Volume>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
