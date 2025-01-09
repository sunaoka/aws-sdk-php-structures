<?php

namespace Sunaoka\Aws\Structures\Connect\ListAuthenticationProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAuthenticationProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
