<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailAddressInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailAddressInsightsVerdict|null $HasValidSyntax
 * @property EmailAddressInsightsVerdict|null $HasValidDnsRecords
 * @property EmailAddressInsightsVerdict|null $MailboxExists
 * @property EmailAddressInsightsVerdict|null $IsRoleAddress
 * @property EmailAddressInsightsVerdict|null $IsDisposable
 * @property EmailAddressInsightsVerdict|null $IsRandomInput
 */
class EmailAddressInsightsMailboxEvaluations extends Shape
{
    /**
     * @param array{
     *     HasValidSyntax?: EmailAddressInsightsVerdict|null,
     *     HasValidDnsRecords?: EmailAddressInsightsVerdict|null,
     *     MailboxExists?: EmailAddressInsightsVerdict|null,
     *     IsRoleAddress?: EmailAddressInsightsVerdict|null,
     *     IsDisposable?: EmailAddressInsightsVerdict|null,
     *     IsRandomInput?: EmailAddressInsightsVerdict|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
