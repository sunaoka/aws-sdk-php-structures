<?php

namespace Sunaoka\Aws\Structures\Odb\CreateOdbNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property string $clientSubnetCidr
 * @property string|null $backupSubnetCidr
 * @property string|null $customDomainName
 * @property string|null $defaultDnsPrefix
 * @property string|null $clientToken
 * @property 'ENABLED'|'DISABLED'|null $s3Access
 * @property 'ENABLED'|'DISABLED'|null $zeroEtlAccess
 * @property 'ENABLED'|'DISABLED'|null $stsAccess
 * @property 'ENABLED'|'DISABLED'|null $kmsAccess
 * @property string|null $s3PolicyDocument
 * @property string|null $stsPolicyDocument
 * @property string|null $kmsPolicyDocument
 * @property list<string>|null $crossRegionS3RestoreSourcesToEnable
 * @property array<string, string>|null $tags
 */
class CreateOdbNetworkRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     clientSubnetCidr: string,
     *     backupSubnetCidr?: string|null,
     *     customDomainName?: string|null,
     *     defaultDnsPrefix?: string|null,
     *     clientToken?: string|null,
     *     s3Access?: 'ENABLED'|'DISABLED'|null,
     *     zeroEtlAccess?: 'ENABLED'|'DISABLED'|null,
     *     stsAccess?: 'ENABLED'|'DISABLED'|null,
     *     kmsAccess?: 'ENABLED'|'DISABLED'|null,
     *     s3PolicyDocument?: string|null,
     *     stsPolicyDocument?: string|null,
     *     kmsPolicyDocument?: string|null,
     *     crossRegionS3RestoreSourcesToEnable?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
