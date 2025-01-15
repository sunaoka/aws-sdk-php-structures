<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceTestHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $testId
 * @property string|null $virtualInterfaceId
 * @property list<string>|null $bgpPeers
 * @property string|null $status
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListVirtualInterfaceTestHistoryRequest extends Request
{
    /**
     * @param array{
     *     testId?: string|null,
     *     virtualInterfaceId?: string|null,
     *     bgpPeers?: list<string>|null,
     *     status?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
