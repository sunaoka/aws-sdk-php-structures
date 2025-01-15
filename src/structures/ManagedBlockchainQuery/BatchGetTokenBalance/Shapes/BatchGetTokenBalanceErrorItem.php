<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\BatchGetTokenBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TokenIdentifier|null $tokenIdentifier
 * @property OwnerIdentifier|null $ownerIdentifier
 * @property BlockchainInstant|null $atBlockchainInstant
 * @property string $errorCode
 * @property string $errorMessage
 * @property 'VALIDATION_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION' $errorType
 */
class BatchGetTokenBalanceErrorItem extends Shape
{
    /**
     * @param array{
     *     tokenIdentifier?: TokenIdentifier|null,
     *     ownerIdentifier?: OwnerIdentifier|null,
     *     atBlockchainInstant?: BlockchainInstant|null,
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
