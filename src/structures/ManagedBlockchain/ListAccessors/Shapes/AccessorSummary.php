<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListAccessors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'BILLING_TOKEN' $Type
 * @property 'AVAILABLE'|'PENDING_DELETION'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $Arn
 * @property 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI' $NetworkType
 */
class AccessorSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'BILLING_TOKEN',
     *     Status?: 'AVAILABLE'|'PENDING_DELETION'|'DELETED',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Arn?: string,
     *     NetworkType?: 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
