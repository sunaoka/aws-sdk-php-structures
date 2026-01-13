<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $listingId
 * @property string|null $listingRevision
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 */
class ListingSummaryItem extends Shape
{
    /**
     * @param array{
     *     listingId?: string|null,
     *     listingRevision?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
