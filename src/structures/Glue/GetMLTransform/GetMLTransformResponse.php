<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransform;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TransformId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'NOT_READY'|'READY'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property list<Shapes\GlueTable>|null $InputRecordTables
 * @property Shapes\TransformParameters|null $Parameters
 * @property Shapes\EvaluationMetrics|null $EvaluationMetrics
 * @property int|null $LabelCount
 * @property list<Shapes\SchemaColumn>|null $Schema
 * @property string|null $Role
 * @property string|null $GlueVersion
 * @property double|null $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property int|null $MaxRetries
 * @property Shapes\TransformEncryption|null $TransformEncryption
 */
class GetMLTransformResponse extends Response
{
}
