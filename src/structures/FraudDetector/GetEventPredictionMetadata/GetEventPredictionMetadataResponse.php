<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $eventId
 * @property string|null $eventTypeName
 * @property string|null $entityId
 * @property string|null $entityType
 * @property string|null $eventTimestamp
 * @property string|null $detectorId
 * @property string|null $detectorVersionId
 * @property string|null $detectorVersionStatus
 * @property list<Shapes\EventVariableSummary>|null $eventVariables
 * @property list<Shapes\EvaluatedRule>|null $rules
 * @property 'ALL_MATCHED'|'FIRST_MATCHED'|null $ruleExecutionMode
 * @property list<string>|null $outcomes
 * @property list<Shapes\EvaluatedModelVersion>|null $evaluatedModelVersions
 * @property list<Shapes\EvaluatedExternalModel>|null $evaluatedExternalModels
 * @property string|null $predictionTimestamp
 */
class GetEventPredictionMetadataResponse extends Response
{
}
