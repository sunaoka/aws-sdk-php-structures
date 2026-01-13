<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataProductId
 * @property string|null $dataProductRevision
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $forms
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property string|null $owningProjectId
 * @property list<ListingSummary>|null $items
 */
class DataProductListing extends Shape
{
    /**
     * @param array{
     *     dataProductId?: string|null,
     *     dataProductRevision?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     forms?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     owningProjectId?: string|null,
     *     items?: list<ListingSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
