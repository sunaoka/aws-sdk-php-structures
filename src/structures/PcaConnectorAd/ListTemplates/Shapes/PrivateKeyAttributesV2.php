<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CryptoProviders
 * @property 'KEY_EXCHANGE'|'SIGNATURE' $KeySpec
 * @property int $MinimalKeyLength
 */
class PrivateKeyAttributesV2 extends Shape
{
    /**
     * @param array{
     *     CryptoProviders?: list<string>,
     *     KeySpec: 'KEY_EXCHANGE'|'SIGNATURE',
     *     MinimalKeyLength: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
