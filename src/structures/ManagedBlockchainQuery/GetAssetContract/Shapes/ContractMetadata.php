<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetAssetContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $symbol
 * @property int|null $decimals
 */
class ContractMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     symbol?: string|null,
     *     decimals?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
