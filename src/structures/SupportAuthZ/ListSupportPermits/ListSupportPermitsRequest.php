<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListSupportPermits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<'ACTIVE'|'INACTIVE'|'DELETING'>|null $supportPermitStatuses
 */
class ListSupportPermitsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     supportPermitStatuses?: list<'ACTIVE'|'INACTIVE'|'DELETING'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
