<?php

namespace Sunaoka\Aws\Structures\kendra\ListFeaturedResultsSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeaturedResultsSetId
 * @property string $FeaturedResultsSetName
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property int $LastUpdatedTimestamp
 * @property int $CreationTimestamp
 */
class FeaturedResultsSetSummary extends Shape
{
    /**
     * @param array{
     *     FeaturedResultsSetId?: string,
     *     FeaturedResultsSetName?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     LastUpdatedTimestamp?: int,
     *     CreationTimestamp?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
