<?php

namespace Sunaoka\Aws\Structures\kendra\CreateFeaturedResultsSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeaturedResultsSetId
 * @property string|null $FeaturedResultsSetName
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<string>|null $QueryTexts
 * @property list<FeaturedDocument>|null $FeaturedDocuments
 * @property int|null $LastUpdatedTimestamp
 * @property int|null $CreationTimestamp
 */
class FeaturedResultsSet extends Shape
{
    /**
     * @param array{
     *     FeaturedResultsSetId?: string|null,
     *     FeaturedResultsSetName?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     QueryTexts?: list<string>|null,
     *     FeaturedDocuments?: list<FeaturedDocument>|null,
     *     LastUpdatedTimestamp?: int|null,
     *     CreationTimestamp?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
