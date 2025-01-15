<?php

namespace Sunaoka\Aws\Structures\VoiceID\UpdateWatchlist;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $DomainId
 * @property string|null $Name
 * @property string $WatchlistId
 */
class UpdateWatchlistRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DomainId: string,
     *     Name?: string|null,
     *     WatchlistId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
