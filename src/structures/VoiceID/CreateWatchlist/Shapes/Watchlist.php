<?php

namespace Sunaoka\Aws\Structures\VoiceID\CreateWatchlist\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property bool|null $DefaultWatchlist
 * @property string|null $Description
 * @property string|null $DomainId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $WatchlistId
 */
class Watchlist extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DefaultWatchlist?: bool|null,
     *     Description?: string|null,
     *     DomainId?: string|null,
     *     Name?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     WatchlistId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
