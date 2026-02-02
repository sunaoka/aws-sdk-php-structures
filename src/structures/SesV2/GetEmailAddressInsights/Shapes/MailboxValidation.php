<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailAddressInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailAddressInsightsVerdict|null $IsValid
 * @property EmailAddressInsightsMailboxEvaluations|null $Evaluations
 */
class MailboxValidation extends Shape
{
    /**
     * @param array{
     *     IsValid?: EmailAddressInsightsVerdict|null,
     *     Evaluations?: EmailAddressInsightsMailboxEvaluations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
