<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListUsageLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $resourceArn
 * @property 'serverless-compute'|'cross-region-datasharing' $usageType
 */
class ListUsageLimitsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     resourceArn?: string,
     *     usageType?: 'serverless-compute'|'cross-region-datasharing'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
