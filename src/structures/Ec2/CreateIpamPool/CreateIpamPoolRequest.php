<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamScopeId
 * @property string $Locale
 * @property string $SourceIpamPoolId
 * @property string $Description
 * @property 'ipv4'|'ipv6' $AddressFamily
 * @property bool $AutoImport
 * @property bool $PubliclyAdvertisable
 * @property int $AllocationMinNetmaskLength
 * @property int $AllocationMaxNetmaskLength
 * @property int $AllocationDefaultNetmaskLength
 * @property list<Shapes\RequestIpamResourceTag> $AllocationResourceTags
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property 'ec2' $AwsService
 * @property 'amazon'|'byoip' $PublicIpSource
 * @property Shapes\IpamPoolSourceResourceRequest $SourceResource
 */
class CreateIpamPoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamScopeId: string,
     *     Locale?: string,
     *     SourceIpamPoolId?: string,
     *     Description?: string,
     *     AddressFamily: 'ipv4'|'ipv6',
     *     AutoImport?: bool,
     *     PubliclyAdvertisable?: bool,
     *     AllocationMinNetmaskLength?: int,
     *     AllocationMaxNetmaskLength?: int,
     *     AllocationDefaultNetmaskLength?: int,
     *     AllocationResourceTags?: list<Shapes\RequestIpamResourceTag>,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string,
     *     AwsService?: 'ec2',
     *     PublicIpSource?: 'amazon'|'byoip',
     *     SourceResource?: Shapes\IpamPoolSourceResourceRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
