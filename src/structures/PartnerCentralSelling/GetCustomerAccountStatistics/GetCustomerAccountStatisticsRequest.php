<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property Shapes\Filter|null $Filter
 * @property list<Shapes\AggregationRequest>|null $Aggregations
 * @property bool|null $IncludeMissing
 */
class GetCustomerAccountStatisticsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Filter?: Shapes\Filter|null,
     *     Aggregations?: list<Shapes\AggregationRequest>|null,
     *     IncludeMissing?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
