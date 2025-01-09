<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientToken
 * @property string $Name
 * @property list<Tag> $Tags
 * @property string $AccessPointId
 * @property string $AccessPointArn
 * @property string $FileSystemId
 * @property PosixUser $PosixUser
 * @property RootDirectory $RootDirectory
 * @property string $OwnerId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 */
class AccessPointDescription extends Shape
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Name?: string,
     *     Tags?: list<Tag>,
     *     AccessPointId?: string,
     *     AccessPointArn?: string,
     *     FileSystemId?: string,
     *     PosixUser?: PosixUser,
     *     RootDirectory?: RootDirectory,
     *     OwnerId?: string,
     *     LifeCycleState?: 'creating'|'available'|'updating'|'deleting'|'deleted'|'error'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
