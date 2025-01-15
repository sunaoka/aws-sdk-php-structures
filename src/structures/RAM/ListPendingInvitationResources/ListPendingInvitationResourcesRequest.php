<?php

namespace Sunaoka\Aws\Structures\RAM\ListPendingInvitationResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareInvitationArn
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 * @property 'ALL'|'REGIONAL'|'GLOBAL'|null $resourceRegionScope
 */
class ListPendingInvitationResourcesRequest extends Request
{
    /**
     * @param array{
     *     resourceShareInvitationArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null,
     *     resourceRegionScope?: 'ALL'|'REGIONAL'|'GLOBAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
