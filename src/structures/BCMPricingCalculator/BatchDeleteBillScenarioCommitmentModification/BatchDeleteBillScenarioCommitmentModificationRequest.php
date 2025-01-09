<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteBillScenarioCommitmentModification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<string> $ids
 */
class BatchDeleteBillScenarioCommitmentModificationRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     ids: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
