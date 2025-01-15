<?php

namespace Sunaoka\Aws\Structures\Iot\ListRelatedResourcesForAuditFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListRelatedResourcesForAuditFindingRequest extends Request
{
    /**
     * @param array{
     *     findingId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
