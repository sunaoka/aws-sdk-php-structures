<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $name
 * @property bool|null $managed
 */
class ListEnvironmentBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     name?: string|null,
     *     managed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
