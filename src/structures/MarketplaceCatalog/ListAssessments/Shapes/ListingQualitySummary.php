<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEEDS_IMPROVEMENT'|'BASIC'|'STRONG'|'EXCELLENT' $Tier
 * @property string|null $EntityRevision
 */
class ListingQualitySummary extends Shape
{
    /**
     * @param array{
     *     Tier: 'NEEDS_IMPROVEMENT'|'BASIC'|'STRONG'|'EXCELLENT',
     *     EntityRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
