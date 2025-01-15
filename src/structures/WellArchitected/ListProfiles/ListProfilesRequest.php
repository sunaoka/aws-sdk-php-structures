<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProfileNamePrefix
 * @property 'SELF'|'SHARED'|null $ProfileOwnerType
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListProfilesRequest extends Request
{
    /**
     * @param array{
     *     ProfileNamePrefix?: string|null,
     *     ProfileOwnerType?: 'SELF'|'SHARED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
