<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<Shapes\BatchUpdateBillScenarioCommitmentModificationEntry> $commitmentModifications
 */
class BatchUpdateBillScenarioCommitmentModificationRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     commitmentModifications: list<Shapes\BatchUpdateBillScenarioCommitmentModificationEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
