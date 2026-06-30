<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListSupportPermitRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $supportCaseDisplayId
 */
class ListSupportPermitRequestsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     supportCaseDisplayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
