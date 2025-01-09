<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $IpamPoolId
 * @property string $SourceIpamPoolId
 * @property string $IpamPoolArn
 * @property string $IpamScopeArn
 * @property 'public'|'private' $IpamScopeType
 * @property string $IpamArn
 * @property string $IpamRegion
 * @property string $Locale
 * @property int $PoolDepth
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress' $State
 * @property string $StateMessage
 * @property string $Description
 * @property bool $AutoImport
 * @property bool $PubliclyAdvertisable
 * @property 'ipv4'|'ipv6' $AddressFamily
 * @property int<0, 128> $AllocationMinNetmaskLength
 * @property int<0, 128> $AllocationMaxNetmaskLength
 * @property int<0, 128> $AllocationDefaultNetmaskLength
 * @property list<IpamResourceTag> $AllocationResourceTags
 * @property list<Tag> $Tags
 * @property 'ec2' $AwsService
 * @property 'amazon'|'byoip' $PublicIpSource
 * @property IpamPoolSourceResource $SourceResource
 */
class IpamPool extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     IpamPoolId?: string,
     *     SourceIpamPoolId?: string,
     *     IpamPoolArn?: string,
     *     IpamScopeArn?: string,
     *     IpamScopeType?: 'public'|'private',
     *     IpamArn?: string,
     *     IpamRegion?: string,
     *     Locale?: string,
     *     PoolDepth?: int,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress',
     *     StateMessage?: string,
     *     Description?: string,
     *     AutoImport?: bool,
     *     PubliclyAdvertisable?: bool,
     *     AddressFamily?: 'ipv4'|'ipv6',
     *     AllocationMinNetmaskLength?: int<0, 128>,
     *     AllocationMaxNetmaskLength?: int<0, 128>,
     *     AllocationDefaultNetmaskLength?: int<0, 128>,
     *     AllocationResourceTags?: list<IpamResourceTag>,
     *     Tags?: list<Tag>,
     *     AwsService?: 'ec2',
     *     PublicIpSource?: 'amazon'|'byoip',
     *     SourceResource?: IpamPoolSourceResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
