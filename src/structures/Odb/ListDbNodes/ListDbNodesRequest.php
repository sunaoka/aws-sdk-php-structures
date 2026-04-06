<?php

namespace Sunaoka\Aws\Structures\Odb\ListDbNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $cloudVmClusterId
 */
class ListDbNodesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     cloudVmClusterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
