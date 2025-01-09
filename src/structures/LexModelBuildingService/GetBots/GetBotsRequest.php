<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 * @property string $nameContains
 */
class GetBotsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 50>,
     *     nameContains?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
