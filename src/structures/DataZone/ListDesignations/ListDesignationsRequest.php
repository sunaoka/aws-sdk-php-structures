<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDesignations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $nextToken
 * @property int<10, 50>|null $maxResults
 */
class ListDesignationsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
