<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class ListEnvironmentActionsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
