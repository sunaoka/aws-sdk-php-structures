<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<Shapes\BatchCreateBillScenarioUsageModificationEntry> $usageModifications
 * @property string|null $clientToken
 */
class BatchCreateBillScenarioUsageModificationRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     usageModifications: list<Shapes\BatchCreateBillScenarioUsageModificationEntry>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
