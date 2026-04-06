<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListAccessors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'BILLING_TOKEN'|null $Type
 * @property 'AVAILABLE'|'PENDING_DELETION'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $Arn
 * @property 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI'|null $NetworkType
 */
class AccessorSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'BILLING_TOKEN'|null,
     *     Status?: 'AVAILABLE'|'PENDING_DELETION'|'DELETED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Arn?: string|null,
     *     NetworkType?: 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
