<?php

namespace Sunaoka\Aws\Structures\Transfer\ListProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property 'LOCAL'|'PARTNER'|null $ProfileType
 */
class ListProfilesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ProfileType?: 'LOCAL'|'PARTNER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
