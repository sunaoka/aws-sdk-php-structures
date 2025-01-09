<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int $maxResults
 * @property string $nextToken
 */
class ListEnvironmentBlueprintConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
