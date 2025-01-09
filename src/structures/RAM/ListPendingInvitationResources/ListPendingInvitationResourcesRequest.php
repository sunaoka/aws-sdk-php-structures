<?php

namespace Sunaoka\Aws\Structures\RAM\ListPendingInvitationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareInvitationArn
 * @property string $nextToken
 * @property int<1, 500> $maxResults
 * @property 'ALL'|'REGIONAL'|'GLOBAL' $resourceRegionScope
 */
class ListPendingInvitationResourcesRequest extends Request
{
    /**
     * @param array{
     *     resourceShareInvitationArn: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 500>,
     *     resourceRegionScope?: 'ALL'|'REGIONAL'|'GLOBAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
