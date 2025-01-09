<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateFeaturedResultsSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeaturedResultsSetId
 * @property string $FeaturedResultsSetName
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property list<string> $QueryTexts
 * @property list<FeaturedDocument> $FeaturedDocuments
 * @property int $LastUpdatedTimestamp
 * @property int $CreationTimestamp
 */
class FeaturedResultsSet extends Shape
{
    /**
     * @param array{
     *     FeaturedResultsSetId?: string,
     *     FeaturedResultsSetName?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     QueryTexts?: list<string>,
     *     FeaturedDocuments?: list<FeaturedDocument>,
     *     LastUpdatedTimestamp?: int,
     *     CreationTimestamp?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
