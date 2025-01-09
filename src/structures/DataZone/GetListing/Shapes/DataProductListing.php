<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $dataProductId
 * @property string $dataProductRevision
 * @property string $forms
 * @property list<DetailedGlossaryTerm> $glossaryTerms
 * @property list<ListingSummary> $items
 * @property string $owningProjectId
 */
class DataProductListing extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     dataProductId?: string,
     *     dataProductRevision?: string,
     *     forms?: string,
     *     glossaryTerms?: list<DetailedGlossaryTerm>,
     *     items?: list<ListingSummary>,
     *     owningProjectId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
