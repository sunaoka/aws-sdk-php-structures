<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property string|null $listingId
 * @property string|null $listingRevision
 */
class ListingSummary extends Shape
{
    /**
     * @param array{
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     listingId?: string|null,
     *     listingRevision?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
