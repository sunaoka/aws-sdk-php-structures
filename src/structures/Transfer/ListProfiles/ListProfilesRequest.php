<?php

namespace Sunaoka\Aws\Structures\Transfer\ListProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'LOCAL'|'PARTNER' $ProfileType
 */
class ListProfilesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ProfileType?: 'LOCAL'|'PARTNER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
