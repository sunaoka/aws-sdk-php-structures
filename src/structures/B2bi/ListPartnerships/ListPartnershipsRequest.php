<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListPartnershipsRequest extends Request
{
    /**
     * @param array{
     *     profileId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
