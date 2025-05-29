<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioCommitmentModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListBillScenarioCommitmentModificationsRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
