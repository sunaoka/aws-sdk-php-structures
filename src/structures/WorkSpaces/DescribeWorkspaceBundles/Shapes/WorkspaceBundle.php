<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BundleId
 * @property string $Name
 * @property string $Owner
 * @property string $Description
 * @property string $ImageId
 * @property RootStorage $RootStorage
 * @property UserStorage $UserStorage
 * @property ComputeType $ComputeType
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'AVAILABLE'|'PENDING'|'ERROR' $State
 * @property 'REGULAR'|'STANDBY' $BundleType
 */
class WorkspaceBundle extends Shape
{
    /**
     * @param array{
     *     BundleId?: string,
     *     Name?: string,
     *     Owner?: string,
     *     Description?: string,
     *     ImageId?: string,
     *     RootStorage?: RootStorage,
     *     UserStorage?: UserStorage,
     *     ComputeType?: ComputeType,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     State?: 'AVAILABLE'|'PENDING'|'ERROR',
     *     BundleType?: 'REGULAR'|'STANDBY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
