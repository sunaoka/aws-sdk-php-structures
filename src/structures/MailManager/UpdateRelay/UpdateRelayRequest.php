<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRelay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RelayAuthentication|null $Authentication
 * @property string $RelayId
 * @property string|null $RelayName
 * @property string|null $ServerName
 * @property int<1, 65535>|null $ServerPort
 */
class UpdateRelayRequest extends Request
{
    /**
     * @param array{
     *     Authentication?: Shapes\RelayAuthentication|null,
     *     RelayId: string,
     *     RelayName?: string|null,
     *     ServerName?: string|null,
     *     ServerPort?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
