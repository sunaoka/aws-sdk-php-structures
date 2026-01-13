<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListAssetRevisionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
