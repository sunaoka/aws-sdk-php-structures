<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRelay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RelayAuthentication $Authentication
 * @property string $ClientToken
 * @property string $RelayName
 * @property string $ServerName
 * @property int<1, 65535> $ServerPort
 * @property list<Shapes\Tag> $Tags
 */
class CreateRelayRequest extends Request
{
    /**
     * @param array{
     *     Authentication: Shapes\RelayAuthentication,
     *     ClientToken?: string,
     *     RelayName: string,
     *     ServerName: string,
     *     ServerPort: int<1, 65535>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
