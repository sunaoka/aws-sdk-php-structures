<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property string|null $nameContains
 */
class GetBotsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nameContains?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
