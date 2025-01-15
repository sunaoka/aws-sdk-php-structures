<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AdapterId
 * @property string|null $AdapterVersion
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>|null $FeatureTypes
 * @property 'ACTIVE'|'AT_RISK'|'DEPRECATED'|'CREATION_ERROR'|'CREATION_IN_PROGRESS'|null $Status
 * @property string|null $StatusMessage
 * @property Shapes\AdapterVersionDatasetConfig|null $DatasetConfig
 * @property string|null $KMSKeyId
 * @property Shapes\OutputConfig|null $OutputConfig
 * @property list<Shapes\AdapterVersionEvaluationMetric>|null $EvaluationMetrics
 * @property array<string, string>|null $Tags
 */
class GetAdapterVersionResponse extends Response
{
}
