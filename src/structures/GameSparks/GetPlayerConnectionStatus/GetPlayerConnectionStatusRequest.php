<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetPlayerConnectionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property string $PlayerId
 * @property string $StageName
 */
class GetPlayerConnectionStatusRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     PlayerId: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
