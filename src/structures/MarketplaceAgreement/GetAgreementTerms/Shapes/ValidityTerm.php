<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $agreementDuration
 * @property \Aws\Api\DateTimeResult|null $agreementStartDate
 * @property \Aws\Api\DateTimeResult|null $agreementEndDate
 */
class ValidityTerm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     agreementDuration?: string|null,
     *     agreementStartDate?: \Aws\Api\DateTimeResult|null,
     *     agreementEndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
