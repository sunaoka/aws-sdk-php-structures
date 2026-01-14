<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $typeIdentifier
 * @property string $typeRevision
 * @property string|null $externalIdentifier
 * @property string $revision
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 * @property list<string>|null $glossaryTerms
 * @property list<string>|null $governedGlossaryTerms
 * @property string $owningProjectId
 * @property string $domainId
 * @property Shapes\AssetListingDetails|null $listing
 * @property list<Shapes\FormOutput> $formsOutput
 * @property list<Shapes\FormOutput>|null $readOnlyFormsOutput
 * @property list<Shapes\TimeSeriesDataPointSummaryFormOutput>|null $latestTimeSeriesDataPointFormsOutput
 * @property Shapes\PredictionConfiguration|null $predictionConfiguration
 */
class CreateAssetRevisionResponse extends Response
{
}
