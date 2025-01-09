<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ComplianceStringFilter> $Filters
 * @property list<string> $ResourceIds
 * @property list<string> $ResourceTypes
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListComplianceItemsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ComplianceStringFilter>,
     *     ResourceIds?: list<string>,
     *     ResourceTypes?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
