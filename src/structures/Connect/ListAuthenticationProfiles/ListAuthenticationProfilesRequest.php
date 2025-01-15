<?php

namespace Sunaoka\Aws\Structures\Connect\ListAuthenticationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAuthenticationProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
