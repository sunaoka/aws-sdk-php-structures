<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioUsageModification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<Shapes\BatchUpdateBillScenarioUsageModificationEntry> $usageModifications
 */
class BatchUpdateBillScenarioUsageModificationRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     usageModifications: list<Shapes\BatchUpdateBillScenarioUsageModificationEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
