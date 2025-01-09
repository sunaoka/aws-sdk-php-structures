<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioCommitmentModification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<Shapes\BatchCreateBillScenarioCommitmentModificationEntry> $commitmentModifications
 * @property string $clientToken
 */
class BatchCreateBillScenarioCommitmentModificationRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     commitmentModifications: list<Shapes\BatchCreateBillScenarioCommitmentModificationEntry>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
