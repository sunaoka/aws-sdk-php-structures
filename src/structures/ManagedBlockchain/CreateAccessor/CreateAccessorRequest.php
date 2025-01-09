<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateAccessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property 'BILLING_TOKEN' $AccessorType
 * @property array<string, string> $Tags
 * @property 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI' $NetworkType
 */
class CreateAccessorRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     AccessorType: 'BILLING_TOKEN',
     *     Tags?: array<string, string>,
     *     NetworkType?: 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
