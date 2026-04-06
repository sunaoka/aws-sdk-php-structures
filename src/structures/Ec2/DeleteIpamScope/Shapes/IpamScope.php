<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamScopeId
 * @property string|null $IpamScopeArn
 * @property string|null $IpamArn
 * @property string|null $IpamRegion
 * @property 'public'|'private'|null $IpamScopeType
 * @property bool|null $IsDefault
 * @property string|null $Description
 * @property int|null $PoolCount
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property list<Tag>|null $Tags
 * @property IpamScopeExternalAuthorityConfiguration|null $ExternalAuthorityConfiguration
 */
class IpamScope extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamScopeId?: string|null,
     *     IpamScopeArn?: string|null,
     *     IpamArn?: string|null,
     *     IpamRegion?: string|null,
     *     IpamScopeType?: 'public'|'private'|null,
     *     IsDefault?: bool|null,
     *     Description?: string|null,
     *     PoolCount?: int|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     Tags?: list<Tag>|null,
     *     ExternalAuthorityConfiguration?: IpamScopeExternalAuthorityConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
