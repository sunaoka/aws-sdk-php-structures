<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\RegisterUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductCode
 * @property int<1, max> $PublicKeyVersion
 * @property string|null $Nonce
 */
class RegisterUsageRequest extends Request
{
    /**
     * @param array{
     *     ProductCode: string,
     *     PublicKeyVersion: int<1, max>,
     *     Nonce?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
