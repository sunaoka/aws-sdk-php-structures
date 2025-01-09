<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataProductRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property int $maxResults
 * @property string $nextToken
 */
class ListDataProductRevisionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
