<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateOdbNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $odbNetworkId
 * @property string|null $displayName
 * @property list<string>|null $peeredCidrsToBeAdded
 * @property list<string>|null $peeredCidrsToBeRemoved
 * @property 'ENABLED'|'DISABLED'|null $s3Access
 * @property 'ENABLED'|'DISABLED'|null $zeroEtlAccess
 * @property 'ENABLED'|'DISABLED'|null $stsAccess
 * @property 'ENABLED'|'DISABLED'|null $kmsAccess
 * @property string|null $s3PolicyDocument
 * @property string|null $stsPolicyDocument
 * @property string|null $kmsPolicyDocument
 * @property list<string>|null $crossRegionS3RestoreSourcesToEnable
 * @property list<string>|null $crossRegionS3RestoreSourcesToDisable
 */
class UpdateOdbNetworkRequest extends Request
{
    /**
     * @param array{
     *     odbNetworkId: string,
     *     displayName?: string|null,
     *     peeredCidrsToBeAdded?: list<string>|null,
     *     peeredCidrsToBeRemoved?: list<string>|null,
     *     s3Access?: 'ENABLED'|'DISABLED'|null,
     *     zeroEtlAccess?: 'ENABLED'|'DISABLED'|null,
     *     stsAccess?: 'ENABLED'|'DISABLED'|null,
     *     kmsAccess?: 'ENABLED'|'DISABLED'|null,
     *     s3PolicyDocument?: string|null,
     *     stsPolicyDocument?: string|null,
     *     kmsPolicyDocument?: string|null,
     *     crossRegionS3RestoreSourcesToEnable?: list<string>|null,
     *     crossRegionS3RestoreSourcesToDisable?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
