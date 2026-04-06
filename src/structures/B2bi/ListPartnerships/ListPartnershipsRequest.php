<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $profileId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListPartnershipsRequest extends Request
{
    /**
     * @param array{
     *     profileId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
