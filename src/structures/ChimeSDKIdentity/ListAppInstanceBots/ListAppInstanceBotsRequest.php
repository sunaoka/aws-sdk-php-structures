<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAppInstanceBotsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
