<?php

namespace Sunaoka\Aws\Structures\DataZone\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 * @property string $assetRevision
 * @property string $assetType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $forms
 * @property list<DetailedGlossaryTerm> $glossaryTerms
 * @property list<TimeSeriesDataPointSummaryFormOutput> $latestTimeSeriesDataPointForms
 * @property string $owningProjectId
 */
class AssetListing extends Shape
{
    /**
     * @param array{
     *     assetId?: string,
     *     assetRevision?: string,
     *     assetType?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     forms?: string,
     *     glossaryTerms?: list<DetailedGlossaryTerm>,
     *     latestTimeSeriesDataPointForms?: list<TimeSeriesDataPointSummaryFormOutput>,
     *     owningProjectId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
