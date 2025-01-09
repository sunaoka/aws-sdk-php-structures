<?php

namespace Sunaoka\Aws\Structures\VoiceID\CreateWatchlist\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property bool $DefaultWatchlist
 * @property string $Description
 * @property string $DomainId
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $WatchlistId
 */
class Watchlist extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DefaultWatchlist?: bool,
     *     Description?: string,
     *     DomainId?: string,
     *     Name?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     WatchlistId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
