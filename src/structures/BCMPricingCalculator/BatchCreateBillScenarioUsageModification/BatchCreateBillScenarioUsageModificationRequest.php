<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioUsageModification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<Shapes\BatchCreateBillScenarioUsageModificationEntry> $usageModifications
 * @property string $clientToken
 */
class BatchCreateBillScenarioUsageModificationRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     usageModifications: list<Shapes\BatchCreateBillScenarioUsageModificationEntry>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
