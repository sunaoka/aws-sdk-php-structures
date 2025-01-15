<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListEnvironmentActionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
