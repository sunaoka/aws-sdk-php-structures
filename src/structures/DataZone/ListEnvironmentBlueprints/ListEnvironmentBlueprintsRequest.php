<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property bool|null $managed
 * @property int<1, 50>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 */
class ListEnvironmentBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     managed?: bool|null,
     *     maxResults?: int<1, 50>|null,
     *     name?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
