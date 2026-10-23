<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\RevokeConnectionToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tokenId
 */
class RevokeConnectionTokenRequest extends Request
{
    /**
     * @param array{tokenId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
