<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementDuration
 * @property \Aws\Api\DateTimeResult|null $agreementEndDate
 * @property \Aws\Api\DateTimeResult|null $agreementStartDate
 * @property string|null $type
 */
class ValidityTerm extends Shape
{
    /**
     * @param array{
     *     agreementDuration?: string|null,
     *     agreementEndDate?: \Aws\Api\DateTimeResult|null,
     *     agreementStartDate?: \Aws\Api\DateTimeResult|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
