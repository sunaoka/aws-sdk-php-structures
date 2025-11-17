<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
