<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListLayouts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListLayoutsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
