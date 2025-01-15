<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceBundle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BundleId
 * @property string|null $Name
 * @property string|null $Owner
 * @property string|null $Description
 * @property string|null $ImageId
 * @property RootStorage|null $RootStorage
 * @property UserStorage|null $UserStorage
 * @property ComputeType|null $ComputeType
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'AVAILABLE'|'PENDING'|'ERROR'|null $State
 * @property 'REGULAR'|'STANDBY'|null $BundleType
 */
class WorkspaceBundle extends Shape
{
    /**
     * @param array{
     *     BundleId?: string|null,
     *     Name?: string|null,
     *     Owner?: string|null,
     *     Description?: string|null,
     *     ImageId?: string|null,
     *     RootStorage?: RootStorage|null,
     *     UserStorage?: UserStorage|null,
     *     ComputeType?: ComputeType|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'AVAILABLE'|'PENDING'|'ERROR'|null,
     *     BundleType?: 'REGULAR'|'STANDBY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
