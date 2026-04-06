<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPrefixListResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamPrefixListResolverId
 * @property string|null $IpamPrefixListResolverArn
 * @property string|null $IpamArn
 * @property string|null $IpamRegion
 * @property string|null $Description
 * @property 'ipv4'|'ipv6'|null $AddressFamily
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property list<Tag>|null $Tags
 * @property 'pending'|'success'|'failure'|null $LastVersionCreationStatus
 * @property string|null $LastVersionCreationStatusMessage
 */
class IpamPrefixListResolver extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamPrefixListResolverId?: string|null,
     *     IpamPrefixListResolverArn?: string|null,
     *     IpamArn?: string|null,
     *     IpamRegion?: string|null,
     *     Description?: string|null,
     *     AddressFamily?: 'ipv4'|'ipv6'|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     Tags?: list<Tag>|null,
     *     LastVersionCreationStatus?: 'pending'|'success'|'failure'|null,
     *     LastVersionCreationStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
