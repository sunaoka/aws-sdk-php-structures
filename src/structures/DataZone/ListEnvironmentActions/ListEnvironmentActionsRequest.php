<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListEnvironmentActionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
