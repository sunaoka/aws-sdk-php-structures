<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListUsageLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $resourceArn
 * @property 'serverless-compute'|'cross-region-datasharing'|null $usageType
 */
class ListUsageLimitsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resourceArn?: string|null,
     *     usageType?: 'serverless-compute'|'cross-region-datasharing'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
