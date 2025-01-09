<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUserEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListAppInstanceUserEndpointsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
