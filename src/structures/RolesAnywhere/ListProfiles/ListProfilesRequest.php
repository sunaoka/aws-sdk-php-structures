<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $pageSize
 */
class ListProfilesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     pageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
