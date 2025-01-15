<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\CreateSavingsPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $savingsPlanOfferingId
 * @property string $commitment
 * @property string|null $upfrontPaymentAmount
 * @property \Aws\Api\DateTimeResult|null $purchaseTime
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateSavingsPlanRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanOfferingId: string,
     *     commitment: string,
     *     upfrontPaymentAmount?: string|null,
     *     purchaseTime?: \Aws\Api\DateTimeResult|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
