<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamUrls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'EXPIRED'|'REVOKED'|'LIMIT_REACHED'|null $Status
 * @property string|null $StreamGroupIdentifier
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListStreamUrlsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'ACTIVE'|'EXPIRED'|'REVOKED'|'LIMIT_REACHED'|null,
     *     StreamGroupIdentifier?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
