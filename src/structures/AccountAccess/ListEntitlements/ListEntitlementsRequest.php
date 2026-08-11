<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationArn
 * @property Shapes\EntitlementFilter $filter
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     applicationArn: string,
     *     filter: Shapes\EntitlementFilter,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
