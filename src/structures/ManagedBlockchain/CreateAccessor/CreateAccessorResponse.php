<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateAccessor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AccessorId
 * @property string|null $BillingToken
 * @property 'ETHEREUM_GOERLI'|'ETHEREUM_MAINNET'|'ETHEREUM_MAINNET_AND_GOERLI'|'POLYGON_MAINNET'|'POLYGON_MUMBAI'|null $NetworkType
 */
class CreateAccessorResponse extends Response
{
}
