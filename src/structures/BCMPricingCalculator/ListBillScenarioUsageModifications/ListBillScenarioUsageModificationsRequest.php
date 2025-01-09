<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarioUsageModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billScenarioId
 * @property list<Shapes\ListUsageFilter> $filters
 * @property string $nextToken
 * @property int<min, 25> $maxResults
 */
class ListBillScenarioUsageModificationsRequest extends Request
{
    /**
     * @param array{
     *     billScenarioId: string,
     *     filters?: list<Shapes\ListUsageFilter>,
     *     nextToken?: string,
     *     maxResults?: int<min, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
