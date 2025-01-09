<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property bool $managed
 * @property int<1, 50> $maxResults
 * @property string $name
 * @property string $nextToken
 */
class ListEnvironmentBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     managed?: bool,
     *     maxResults?: int<1, 50>,
     *     name?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
