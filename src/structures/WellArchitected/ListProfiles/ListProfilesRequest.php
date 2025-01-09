<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileNamePrefix
 * @property 'SELF'|'SHARED' $ProfileOwnerType
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListProfilesRequest extends Request
{
    /**
     * @param array{
     *     ProfileNamePrefix?: string,
     *     ProfileOwnerType?: 'SELF'|'SHARED',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
