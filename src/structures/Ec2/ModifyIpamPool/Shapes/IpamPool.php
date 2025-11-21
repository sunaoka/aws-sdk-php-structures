<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamPoolId
 * @property string|null $SourceIpamPoolId
 * @property string|null $IpamPoolArn
 * @property string|null $IpamScopeArn
 * @property 'public'|'private'|null $IpamScopeType
 * @property string|null $IpamArn
 * @property string|null $IpamRegion
 * @property string|null $Locale
 * @property int|null $PoolDepth
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property string|null $StateMessage
 * @property string|null $Description
 * @property bool|null $AutoImport
 * @property bool|null $PubliclyAdvertisable
 * @property 'ipv4'|'ipv6'|null $AddressFamily
 * @property int<0, 128>|null $AllocationMinNetmaskLength
 * @property int<0, 128>|null $AllocationMaxNetmaskLength
 * @property int<0, 128>|null $AllocationDefaultNetmaskLength
 * @property list<IpamResourceTag>|null $AllocationResourceTags
 * @property list<Tag>|null $Tags
 * @property 'ec2'|'global-services'|null $AwsService
 * @property 'amazon'|'byoip'|null $PublicIpSource
 * @property IpamPoolSourceResource|null $SourceResource
 */
class IpamPool extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamPoolId?: string|null,
     *     SourceIpamPoolId?: string|null,
     *     IpamPoolArn?: string|null,
     *     IpamScopeArn?: string|null,
     *     IpamScopeType?: 'public'|'private'|null,
     *     IpamArn?: string|null,
     *     IpamRegion?: string|null,
     *     Locale?: string|null,
     *     PoolDepth?: int|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     StateMessage?: string|null,
     *     Description?: string|null,
     *     AutoImport?: bool|null,
     *     PubliclyAdvertisable?: bool|null,
     *     AddressFamily?: 'ipv4'|'ipv6'|null,
     *     AllocationMinNetmaskLength?: int<0, 128>|null,
     *     AllocationMaxNetmaskLength?: int<0, 128>|null,
     *     AllocationDefaultNetmaskLength?: int<0, 128>|null,
     *     AllocationResourceTags?: list<IpamResourceTag>|null,
     *     Tags?: list<Tag>|null,
     *     AwsService?: 'ec2'|'global-services'|null,
     *     PublicIpSource?: 'amazon'|'byoip'|null,
     *     SourceResource?: IpamPoolSourceResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
