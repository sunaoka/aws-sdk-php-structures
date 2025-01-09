<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\RegisterUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductCode
 * @property int $PublicKeyVersion
 * @property string $Nonce
 */
class RegisterUsageRequest extends Request
{
    /**
     * @param array{
     *     ProductCode: string,
     *     PublicKeyVersion: int,
     *     Nonce?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
