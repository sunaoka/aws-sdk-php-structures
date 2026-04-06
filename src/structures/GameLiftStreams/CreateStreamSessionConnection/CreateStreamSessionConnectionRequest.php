<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamSessionConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $Identifier
 * @property string $StreamSessionIdentifier
 * @property string $SignalRequest
 */
class CreateStreamSessionConnectionRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Identifier: string,
     *     StreamSessionIdentifier: string,
     *     SignalRequest: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
