<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
