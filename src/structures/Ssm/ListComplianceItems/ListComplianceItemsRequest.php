<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ComplianceStringFilter>|null $Filters
 * @property list<string>|null $ResourceIds
 * @property list<string>|null $ResourceTypes
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListComplianceItemsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ComplianceStringFilter>|null,
     *     ResourceIds?: list<string>|null,
     *     ResourceTypes?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
