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
 * @property string|null $s3PolicyDocument
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
     *     s3PolicyDocument?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
