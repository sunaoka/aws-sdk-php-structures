<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSA'|'ECDH_P256'|'ECDH_P384'|'ECDH_P521'|null $Algorithm
 * @property list<string>|null $CryptoProviders
 * @property 'KEY_EXCHANGE'|'SIGNATURE' $KeySpec
 * @property KeyUsageProperty|null $KeyUsageProperty
 * @property int<1, max> $MinimalKeyLength
 */
class PrivateKeyAttributesV4 extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'RSA'|'ECDH_P256'|'ECDH_P384'|'ECDH_P521'|null,
     *     CryptoProviders?: list<string>|null,
     *     KeySpec: 'KEY_EXCHANGE'|'SIGNATURE',
     *     KeyUsageProperty?: KeyUsageProperty|null,
     *     MinimalKeyLength: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
