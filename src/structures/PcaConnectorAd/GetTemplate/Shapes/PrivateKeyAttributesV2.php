<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CryptoProviders
 * @property 'KEY_EXCHANGE'|'SIGNATURE' $KeySpec
 * @property int<1, max> $MinimalKeyLength
 */
class PrivateKeyAttributesV2 extends Shape
{
    /**
     * @param array{
     *     CryptoProviders?: list<string>,
     *     KeySpec: 'KEY_EXCHANGE'|'SIGNATURE',
     *     MinimalKeyLength: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
