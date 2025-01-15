<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccessPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientToken
 * @property string|null $Name
 * @property list<Tag>|null $Tags
 * @property string|null $AccessPointId
 * @property string|null $AccessPointArn
 * @property string|null $FileSystemId
 * @property PosixUser|null $PosixUser
 * @property RootDirectory|null $RootDirectory
 * @property string|null $OwnerId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error'|null $LifeCycleState
 */
class AccessPointDescription extends Shape
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Name?: string|null,
     *     Tags?: list<Tag>|null,
     *     AccessPointId?: string|null,
     *     AccessPointArn?: string|null,
     *     FileSystemId?: string|null,
     *     PosixUser?: PosixUser|null,
     *     RootDirectory?: RootDirectory|null,
     *     OwnerId?: string|null,
     *     LifeCycleState?: 'creating'|'available'|'updating'|'deleting'|'deleted'|'error'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
