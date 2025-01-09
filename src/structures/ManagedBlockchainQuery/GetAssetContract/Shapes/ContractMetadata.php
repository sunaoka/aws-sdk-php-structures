<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetAssetContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $symbol
 * @property int $decimals
 */
class ContractMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     symbol?: string,
     *     decimals?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
