<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlDomainInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListControlDomainInsightsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
