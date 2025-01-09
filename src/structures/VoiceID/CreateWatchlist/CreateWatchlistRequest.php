<?php

namespace Sunaoka\Aws\Structures\VoiceID\CreateWatchlist;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Description
 * @property string $DomainId
 * @property string $Name
 */
class CreateWatchlistRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Description?: string,
     *     DomainId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
