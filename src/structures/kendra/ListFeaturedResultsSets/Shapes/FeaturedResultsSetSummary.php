<?php

namespace Sunaoka\Aws\Structures\kendra\ListFeaturedResultsSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeaturedResultsSetId
 * @property string|null $FeaturedResultsSetName
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property int|null $LastUpdatedTimestamp
 * @property int|null $CreationTimestamp
 */
class FeaturedResultsSetSummary extends Shape
{
    /**
     * @param array{
     *     FeaturedResultsSetId?: string|null,
     *     FeaturedResultsSetName?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     LastUpdatedTimestamp?: int|null,
     *     CreationTimestamp?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
