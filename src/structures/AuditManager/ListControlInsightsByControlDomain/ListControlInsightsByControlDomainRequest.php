<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlInsightsByControlDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlDomainId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListControlInsightsByControlDomainRequest extends Request
{
    /**
     * @param array{
     *     controlDomainId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
