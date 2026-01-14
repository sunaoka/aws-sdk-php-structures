<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $listingId
 * @property string|null $listingRevision
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 */
class ListingSummary extends Shape
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
