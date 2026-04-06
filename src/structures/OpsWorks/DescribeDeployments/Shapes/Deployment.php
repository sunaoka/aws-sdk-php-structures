<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeploymentId
 * @property string|null $StackId
 * @property string|null $AppId
 * @property string|null $CreatedAt
 * @property string|null $CompletedAt
 * @property int|null $Duration
 * @property string|null $IamUserArn
 * @property string|null $Comment
 * @property DeploymentCommand|null $Command
 * @property string|null $Status
 * @property string|null $CustomJson
 * @property list<string>|null $InstanceIds
 */
class Deployment extends Shape
{
    /**
     * @param array{
     *     DeploymentId?: string|null,
     *     StackId?: string|null,
     *     AppId?: string|null,
     *     CreatedAt?: string|null,
     *     CompletedAt?: string|null,
     *     Duration?: int|null,
     *     IamUserArn?: string|null,
     *     Comment?: string|null,
     *     Command?: DeploymentCommand|null,
     *     Status?: string|null,
     *     CustomJson?: string|null,
     *     InstanceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
