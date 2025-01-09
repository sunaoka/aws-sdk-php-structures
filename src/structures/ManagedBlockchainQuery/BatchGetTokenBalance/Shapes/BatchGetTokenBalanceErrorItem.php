<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\BatchGetTokenBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TokenIdentifier $tokenIdentifier
 * @property OwnerIdentifier $ownerIdentifier
 * @property BlockchainInstant $atBlockchainInstant
 * @property string $errorCode
 * @property string $errorMessage
 * @property 'VALIDATION_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION' $errorType
 */
class BatchGetTokenBalanceErrorItem extends Shape
{
    /**
     * @param array{
     *     tokenIdentifier?: TokenIdentifier,
     *     ownerIdentifier?: OwnerIdentifier,
     *     atBlockchainInstant?: BlockchainInstant,
     *     errorCode: string,
     *     errorMessage: string,
     *     errorType: 'VALIDATION_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
