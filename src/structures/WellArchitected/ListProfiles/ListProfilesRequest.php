<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileNamePrefix
 * @property 'SELF'|'SHARED' $ProfileOwnerType
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListProfilesRequest extends Request
{
    /**
     * @param array{
     *     ProfileNamePrefix?: string,
     *     ProfileOwnerType?: 'SELF'|'SHARED',
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
