<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $serverId
 */
class GetServerDetailsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     serverId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
