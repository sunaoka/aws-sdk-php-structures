<?php

namespace Sunaoka\Aws\Structures\Sts\GetDelegatedAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TradeInToken
 */
class GetDelegatedAccessTokenRequest extends Request
{
    /**
     * @param array{TradeInToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
