<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioCommitmentModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListBillScenarioCommitmentModificationsRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
