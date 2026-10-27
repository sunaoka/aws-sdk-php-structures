<?php

namespace Sunaoka\Aws\Structures\Odb\ListExascaleDbStorageVaults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $cloudExadataInfrastructureId
 * @property 'EXASCALE_INFRASTRUCTURE'|'DEDICATED_INFRASTRUCTURE'|null $vaultType
 */
class ListExascaleDbStorageVaultsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     cloudExadataInfrastructureId?: string|null,
     *     vaultType?: 'EXASCALE_INFRASTRUCTURE'|'DEDICATED_INFRASTRUCTURE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
