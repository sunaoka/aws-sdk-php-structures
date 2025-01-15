<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $dataProductId
 * @property string|null $dataProductRevision
 * @property string|null $forms
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property list<ListingSummary>|null $items
 * @property string|null $owningProjectId
 */
class DataProductListing extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     dataProductId?: string|null,
     *     dataProductRevision?: string|null,
     *     forms?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     items?: list<ListingSummary>|null,
     *     owningProjectId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
