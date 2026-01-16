<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $environmentName
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property Shapes\ServiceAccessSecurityGroups|null $serviceAccessSecurityGroups
 * @property string $vpcId
 * @property string $serviceAccessSubnetId
 * @property 'VCF-5.2.1'|'VCF-5.2.2' $vcfVersion
 * @property bool $termsAccepted
 * @property list<Shapes\LicenseInfo> $licenseInfo
 * @property Shapes\InitialVlans $initialVlans
 * @property list<Shapes\HostInfoForCreate> $hosts
 * @property Shapes\ConnectivityInfo $connectivityInfo
 * @property Shapes\VcfHostnames $vcfHostnames
 * @property string $siteId
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentName?: string|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     serviceAccessSecurityGroups?: Shapes\ServiceAccessSecurityGroups|null,
     *     vpcId: string,
     *     serviceAccessSubnetId: string,
     *     vcfVersion: 'VCF-5.2.1'|'VCF-5.2.2',
     *     termsAccepted: bool,
     *     licenseInfo: list<Shapes\LicenseInfo>,
     *     initialVlans: Shapes\InitialVlans,
     *     hosts: list<Shapes\HostInfoForCreate>,
     *     connectivityInfo: Shapes\ConnectivityInfo,
     *     vcfHostnames: Shapes\VcfHostnames,
     *     siteId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
