<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteBillScenarioUsageModification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<string> $ids
 */
class BatchDeleteBillScenarioUsageModificationRequest extends Request
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
