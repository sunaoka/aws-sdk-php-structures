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
 * @property 'VCF-5.2.1'|'VCF-5.2.2'|'SELF_DEPLOYED' $vcfVersion
 * @property bool $termsAccepted
 * @property Shapes\InitialVlans $initialVlans
 * @property Shapes\ConnectivityInfo|null $connectivityInfo
 * @property list<Shapes\LicenseInfo>|null $licenseInfo
 * @property list<Shapes\HostInfoForCreate>|null $hosts
 * @property Shapes\VcfHostnames|null $vcfHostnames
 * @property string|null $siteId
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
     *     vcfVersion: 'VCF-5.2.1'|'VCF-5.2.2'|'SELF_DEPLOYED',
     *     termsAccepted: bool,
     *     initialVlans: Shapes\InitialVlans,
     *     connectivityInfo?: Shapes\ConnectivityInfo|null,
     *     licenseInfo?: list<Shapes\LicenseInfo>|null,
     *     hosts?: list<Shapes\HostInfoForCreate>|null,
     *     vcfHostnames?: Shapes\VcfHostnames|null,
     *     siteId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
