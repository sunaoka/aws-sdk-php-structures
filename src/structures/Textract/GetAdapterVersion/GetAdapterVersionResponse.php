<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AdapterId
 * @property string $AdapterVersion
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property 'ACTIVE'|'AT_RISK'|'DEPRECATED'|'CREATION_ERROR'|'CREATION_IN_PROGRESS' $Status
 * @property string $StatusMessage
 * @property Shapes\AdapterVersionDatasetConfig $DatasetConfig
 * @property string $KMSKeyId
 * @property Shapes\OutputConfig $OutputConfig
 * @property list<Shapes\AdapterVersionEvaluationMetric> $EvaluationMetrics
 * @property array<string, string> $Tags
 */
class GetAdapterVersionResponse extends Response
{
}
