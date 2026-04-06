<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRelay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RelayId
 * @property string|null $RelayName
 * @property string|null $ServerName
 * @property int<1, 65535>|null $ServerPort
 * @property Shapes\RelayAuthentication|null $Authentication
 */
class UpdateRelayRequest extends Request
{
    /**
     * @param array{
     *     RelayId: string,
     *     RelayName?: string|null,
     *     ServerName?: string|null,
     *     ServerPort?: int<1, 65535>|null,
     *     Authentication?: Shapes\RelayAuthentication|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
