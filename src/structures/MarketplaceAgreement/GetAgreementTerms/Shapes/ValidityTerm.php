<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agreementDuration
 * @property \Aws\Api\DateTimeResult $agreementEndDate
 * @property \Aws\Api\DateTimeResult $agreementStartDate
 * @property string $type
 */
class ValidityTerm extends Shape
{
    /**
     * @param array{
     *     agreementDuration?: string,
     *     agreementEndDate?: \Aws\Api\DateTimeResult,
     *     agreementStartDate?: \Aws\Api\DateTimeResult,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
