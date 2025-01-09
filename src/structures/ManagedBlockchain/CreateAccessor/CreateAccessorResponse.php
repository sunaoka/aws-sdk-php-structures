<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateAccessor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AccessorId
 * @property string $BillingToken
 * @property 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI' $NetworkType
 */
class CreateAccessorResponse extends Response
{
}
