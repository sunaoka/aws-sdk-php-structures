<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $eventId
 * @property string $eventTypeName
 * @property string $entityId
 * @property string $entityType
 * @property string $eventTimestamp
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property string $detectorVersionStatus
 * @property list<Shapes\EventVariableSummary> $eventVariables
 * @property list<Shapes\EvaluatedRule> $rules
 * @property 'ALL_MATCHED'|'FIRST_MATCHED' $ruleExecutionMode
 * @property list<string> $outcomes
 * @property list<Shapes\EvaluatedModelVersion> $evaluatedModelVersions
 * @property list<Shapes\EvaluatedExternalModel> $evaluatedExternalModels
 * @property string $predictionTimestamp
 */
class GetEventPredictionMetadataResponse extends Response
{
}
