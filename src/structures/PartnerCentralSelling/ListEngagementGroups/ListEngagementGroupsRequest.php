<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property 'SalesReady'|'MarketingReady'|'LowPotential'|null $ReadinessLevel
 * @property Shapes\EngagementGroupSort|null $Sort
 * @property list<string>|null $EngagementGroupIdentifiers
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEngagementGroupsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ReadinessLevel?: 'SalesReady'|'MarketingReady'|'LowPotential'|null,
     *     Sort?: Shapes\EngagementGroupSort|null,
     *     EngagementGroupIdentifiers?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
