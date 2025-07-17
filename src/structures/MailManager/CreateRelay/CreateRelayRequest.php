<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRelay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $RelayName
 * @property string $ServerName
 * @property int<1, 65535> $ServerPort
 * @property Shapes\RelayAuthentication $Authentication
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRelayRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     RelayName: string,
     *     ServerName: string,
     *     ServerPort: int<1, 65535>,
     *     Authentication: Shapes\RelayAuthentication,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
