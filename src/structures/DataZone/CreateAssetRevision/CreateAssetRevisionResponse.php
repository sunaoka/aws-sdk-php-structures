<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $externalIdentifier
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 * @property list<Shapes\FormOutput> $formsOutput
 * @property list<string>|null $glossaryTerms
 * @property string $id
 * @property list<Shapes\TimeSeriesDataPointSummaryFormOutput>|null $latestTimeSeriesDataPointFormsOutput
 * @property Shapes\AssetListingDetails|null $listing
 * @property string $name
 * @property string $owningProjectId
 * @property Shapes\PredictionConfiguration|null $predictionConfiguration
 * @property list<Shapes\FormOutput>|null $readOnlyFormsOutput
 * @property string $revision
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class CreateAssetRevisionResponse extends Response
{
}
