<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Arn
 * @property string|null $Catalog
 * @property string|null $Name
 * @property string|null $Description
 * @property int|null $Count
 * @property 'SalesReady'|'MarketingReady'|'LowPotential'|null $ReadinessLevel
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class EngagementGroupSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Arn?: string|null,
     *     Catalog?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Count?: int|null,
     *     ReadinessLevel?: 'SalesReady'|'MarketingReady'|'LowPotential'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
