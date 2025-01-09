<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TransformId
 * @property string $Name
 * @property string $Description
 * @property 'NOT_READY'|'READY'|'DELETING' $Status
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property list<Shapes\GlueTable> $InputRecordTables
 * @property Shapes\TransformParameters $Parameters
 * @property Shapes\EvaluationMetrics $EvaluationMetrics
 * @property int $LabelCount
 * @property list<Shapes\SchemaColumn> $Schema
 * @property string $Role
 * @property string $GlueVersion
 * @property double $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property int $NumberOfWorkers
 * @property int<1, max> $Timeout
 * @property int $MaxRetries
 * @property Shapes\TransformEncryption $TransformEncryption
 */
class GetMLTransformResponse extends Response
{
}
