<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeWatchlist;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $WatchlistId
 */
class DescribeWatchlistRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     WatchlistId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
