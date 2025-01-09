<?php

namespace Sunaoka\Aws\Structures\Iot\ListRelatedResourcesForAuditFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListRelatedResourcesForAuditFindingRequest extends Request
{
    /**
     * @param array{
     *     findingId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
