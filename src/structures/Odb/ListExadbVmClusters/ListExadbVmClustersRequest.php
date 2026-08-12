<?php

namespace Sunaoka\Aws\Structures\Odb\ListExadbVmClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $exascaleDbStorageVaultId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListExadbVmClustersRequest extends Request
{
    /**
     * @param array{
     *     exascaleDbStorageVaultId?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
