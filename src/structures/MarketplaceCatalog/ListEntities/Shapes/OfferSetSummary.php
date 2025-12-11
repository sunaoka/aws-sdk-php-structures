<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'Draft'|'Released'|null $State
 * @property string|null $ReleaseDate
 * @property list<string>|null $AssociatedOfferIds
 * @property string|null $SolutionId
 */
class OfferSetSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     State?: 'Draft'|'Released'|null,
     *     ReleaseDate?: string|null,
     *     AssociatedOfferIds?: list<string>|null,
     *     SolutionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
