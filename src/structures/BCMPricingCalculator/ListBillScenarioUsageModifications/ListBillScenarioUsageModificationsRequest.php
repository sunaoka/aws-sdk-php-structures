<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioUsageModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<Shapes\ListUsageFilter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 25>|null $maxResults
 */
class ListBillScenarioUsageModificationsRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     filters?: list<Shapes\ListUsageFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
