<?php

namespace Sunaoka\Aws\Structures\Billing\ListContracts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contractArn
 * @property Interval $contractTerm
 * @property 'Cross-Service'|'Service-Specific'|'Other'|null $contractType
 * @property 'ASSOCIATED'|'NOT_ASSOCIATED' $associationStatus
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ContractSummary extends Shape
{
    /**
     * @param array{
     *     contractArn: string,
     *     contractTerm: Interval,
     *     contractType?: 'Cross-Service'|'Service-Specific'|'Other'|null,
     *     associationStatus: 'ASSOCIATED'|'NOT_ASSOCIATED',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
