<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUserEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAppInstanceUserEndpointsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
