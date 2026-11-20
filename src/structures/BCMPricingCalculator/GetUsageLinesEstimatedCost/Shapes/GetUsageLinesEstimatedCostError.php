<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetUsageLinesEstimatedCost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $serviceCode
 * @property string $usageType
 * @property string $operation
 * @property 'BAD_REQUEST'|'NOT_FOUND'|'CONFLICT'|'INTERNAL_SERVER_ERROR' $errorCode
 * @property string $errorMessage
 */
class GetUsageLinesEstimatedCostError extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     serviceCode: string,
     *     usageType: string,
     *     operation: string,
     *     errorCode: 'BAD_REQUEST'|'NOT_FOUND'|'CONFLICT'|'INTERNAL_SERVER_ERROR',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
