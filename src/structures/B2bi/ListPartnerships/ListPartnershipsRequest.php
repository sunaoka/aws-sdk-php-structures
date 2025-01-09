<?php

namespace Sunaoka\Aws\Structures\B2bi\ListPartnerships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListPartnershipsRequest extends Request
{
    /**
     * @param array{
     *     profileId?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
