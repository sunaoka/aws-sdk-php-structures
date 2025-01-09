<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $externalIdentifier
 * @property \Aws\Api\DateTimeResult $firstRevisionCreatedAt
 * @property string $firstRevisionCreatedBy
 * @property list<Shapes\FormOutput> $formsOutput
 * @property list<string> $glossaryTerms
 * @property string $id
 * @property list<Shapes\TimeSeriesDataPointSummaryFormOutput> $latestTimeSeriesDataPointFormsOutput
 * @property Shapes\AssetListingDetails $listing
 * @property string $name
 * @property string $owningProjectId
 * @property Shapes\PredictionConfiguration $predictionConfiguration
 * @property list<Shapes\FormOutput> $readOnlyFormsOutput
 * @property string $revision
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class CreateAssetResponse extends Response
{
}
