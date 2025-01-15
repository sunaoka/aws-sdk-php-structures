<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $assetId
 * @property string|null $assetRevision
 * @property string|null $assetType
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $forms
 * @property list<DetailedGlossaryTerm>|null $glossaryTerms
 * @property list<TimeSeriesDataPointSummaryFormOutput>|null $latestTimeSeriesDataPointForms
 * @property string|null $owningProjectId
 */
class AssetListing extends Shape
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     assetRevision?: string|null,
     *     assetType?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     forms?: string|null,
     *     glossaryTerms?: list<DetailedGlossaryTerm>|null,
     *     latestTimeSeriesDataPointForms?: list<TimeSeriesDataPointSummaryFormOutput>|null,
     *     owningProjectId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
