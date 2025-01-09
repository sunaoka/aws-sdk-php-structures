<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\CreateSavingsPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $savingsPlanOfferingId
 * @property string $commitment
 * @property string $upfrontPaymentAmount
 * @property \Aws\Api\DateTimeResult $purchaseTime
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateSavingsPlanRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanOfferingId: string,
     *     commitment: string,
     *     upfrontPaymentAmount?: string,
     *     purchaseTime?: \Aws\Api\DateTimeResult,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
