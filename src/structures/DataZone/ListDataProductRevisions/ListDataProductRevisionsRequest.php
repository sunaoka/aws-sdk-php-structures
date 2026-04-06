<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataProductRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListDataProductRevisionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
