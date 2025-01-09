<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $nsInstanceId
 */
class ListSolNetworkOperationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     nsInstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
