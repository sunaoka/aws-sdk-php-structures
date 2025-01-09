<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeploymentId
 * @property string $StackId
 * @property string $AppId
 * @property string $CreatedAt
 * @property string $CompletedAt
 * @property int $Duration
 * @property string $IamUserArn
 * @property string $Comment
 * @property DeploymentCommand $Command
 * @property string $Status
 * @property string $CustomJson
 * @property list<string> $InstanceIds
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     DeploymentId?: string,
     *     StackId?: string,
     *     AppId?: string,
     *     CreatedAt?: string,
     *     CompletedAt?: string,
     *     Duration?: int,
     *     IamUserArn?: string,
     *     Comment?: string,
     *     Command?: DeploymentCommand,
     *     Status?: string,
     *     CustomJson?: string,
     *     InstanceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
