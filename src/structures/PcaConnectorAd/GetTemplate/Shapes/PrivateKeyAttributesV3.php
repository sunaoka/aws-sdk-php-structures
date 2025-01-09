<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RSA'|'ECDH_P256'|'ECDH_P384'|'ECDH_P521' $Algorithm
 * @property list<string> $CryptoProviders
 * @property 'KEY_EXCHANGE'|'SIGNATURE' $KeySpec
 * @property KeyUsageProperty $KeyUsageProperty
 * @property int<1, max> $MinimalKeyLength
 */
class PrivateKeyAttributesV3 extends Shape
{
    /**
     * @param array{
     *     Algorithm: 'RSA'|'ECDH_P256'|'ECDH_P384'|'ECDH_P521',
     *     CryptoProviders?: list<string>,
     *     KeySpec: 'KEY_EXCHANGE'|'SIGNATURE',
     *     KeyUsageProperty: KeyUsageProperty,
     *     MinimalKeyLength: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
