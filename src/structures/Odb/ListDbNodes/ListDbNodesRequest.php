<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $cloudVmClusterId
 * @property string|null $exadbVmClusterId
 */
class ListDbNodesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     cloudVmClusterId?: string|null,
     *     exadbVmClusterId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
