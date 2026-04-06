<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamScopeId
 * @property string|null $Locale
 * @property string|null $SourceIpamPoolId
 * @property string|null $Description
 * @property 'ipv4'|'ipv6' $AddressFamily
 * @property bool|null $AutoImport
 * @property bool|null $PubliclyAdvertisable
 * @property int<0, 128>|null $AllocationMinNetmaskLength
 * @property int<0, 128>|null $AllocationMaxNetmaskLength
 * @property int<0, 128>|null $AllocationDefaultNetmaskLength
 * @property list<Shapes\RequestIpamResourceTag>|null $AllocationResourceTags
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property 'ec2'|'global-services'|null $AwsService
 * @property 'amazon'|'byoip'|null $PublicIpSource
 * @property Shapes\IpamPoolSourceResourceRequest|null $SourceResource
 */
class CreateIpamPoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamScopeId: string,
     *     Locale?: string|null,
     *     SourceIpamPoolId?: string|null,
     *     Description?: string|null,
     *     AddressFamily: 'ipv4'|'ipv6',
     *     AutoImport?: bool|null,
     *     PubliclyAdvertisable?: bool|null,
     *     AllocationMinNetmaskLength?: int<0, 128>|null,
     *     AllocationMaxNetmaskLength?: int<0, 128>|null,
     *     AllocationDefaultNetmaskLength?: int<0, 128>|null,
     *     AllocationResourceTags?: list<Shapes\RequestIpamResourceTag>|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     AwsService?: 'ec2'|'global-services'|null,
     *     PublicIpSource?: 'amazon'|'byoip'|null,
     *     SourceResource?: Shapes\IpamPoolSourceResourceRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
