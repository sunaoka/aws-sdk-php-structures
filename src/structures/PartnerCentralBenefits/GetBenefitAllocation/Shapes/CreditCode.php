<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsAccountId
 * @property MonetaryValue $Value
 * @property string $AwsCreditCode
 * @property 'ACTIVE'|'INACTIVE'|'FULFILLED' $Status
 * @property \Aws\Api\DateTimeResult $IssuedAt
 * @property \Aws\Api\DateTimeResult $ExpiresAt
 */
class CreditCode extends Shape
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Value: MonetaryValue,
     *     AwsCreditCode: string,
     *     Status: 'ACTIVE'|'INACTIVE'|'FULFILLED',
     *     IssuedAt: \Aws\Api\DateTimeResult,
     *     ExpiresAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
