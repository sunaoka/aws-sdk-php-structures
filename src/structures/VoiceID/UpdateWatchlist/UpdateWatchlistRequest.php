<?php

namespace Sunaoka\Aws\Structures\VoiceID\UpdateWatchlist;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $DomainId
 * @property string $Name
 * @property string $WatchlistId
 */
class UpdateWatchlistRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     DomainId: string,
     *     Name?: string,
     *     WatchlistId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
