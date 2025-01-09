<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $IpamScopeId
 * @property string $IpamScopeArn
 * @property string $IpamArn
 * @property string $IpamRegion
 * @property 'public'|'private' $IpamScopeType
 * @property bool $IsDefault
 * @property string $Description
 * @property int $PoolCount
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress' $State
 * @property list<Tag> $Tags
 */
class IpamScope extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     IpamScopeId?: string,
     *     IpamScopeArn?: string,
     *     IpamArn?: string,
     *     IpamRegion?: string,
     *     IpamScopeType?: 'public'|'private',
     *     IsDefault?: bool,
     *     Description?: string,
     *     PoolCount?: int,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
