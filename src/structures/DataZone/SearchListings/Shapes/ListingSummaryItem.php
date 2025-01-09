<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DetailedGlossaryTerm> $glossaryTerms
 * @property string $listingId
 * @property string $listingRevision
 */
class ListingSummaryItem extends Shape
{
    /**
     * @param array{
     *     glossaryTerms?: list<DetailedGlossaryTerm>,
     *     listingId?: string,
     *     listingRevision?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
