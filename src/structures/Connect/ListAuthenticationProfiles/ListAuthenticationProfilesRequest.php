<?php

namespace Sunaoka\Aws\Structures\Connect\ListAuthenticationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListAuthenticationProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
