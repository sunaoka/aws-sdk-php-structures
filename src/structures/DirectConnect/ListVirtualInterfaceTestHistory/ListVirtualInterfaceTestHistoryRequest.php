<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceTestHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testId
 * @property string $virtualInterfaceId
 * @property list<string> $bgpPeers
 * @property string $status
 * @property int $maxResults
 * @property string $nextToken
 */
class ListVirtualInterfaceTestHistoryRequest extends Request
{
    /**
     * @param array{
     *     testId?: string,
     *     virtualInterfaceId?: string,
     *     bgpPeers?: list<string>,
     *     status?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
