<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlInsightsByControlDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlDomainId
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListControlInsightsByControlDomainRequest extends Request
{
    /**
     * @param array{
     *     controlDomainId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
