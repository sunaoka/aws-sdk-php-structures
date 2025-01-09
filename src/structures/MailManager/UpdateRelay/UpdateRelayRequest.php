<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRelay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RelayAuthentication $Authentication
 * @property string $RelayId
 * @property string $RelayName
 * @property string $ServerName
 * @property int $ServerPort
 */
class UpdateRelayRequest extends Request
{
    /**
     * @param array{
     *     Authentication?: Shapes\RelayAuthentication,
     *     RelayId: string,
     *     RelayName?: string,
     *     ServerName?: string,
     *     ServerPort?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
