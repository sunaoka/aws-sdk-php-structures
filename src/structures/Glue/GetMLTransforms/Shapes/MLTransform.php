<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransformId
 * @property string $Name
 * @property string $Description
 * @property 'NOT_READY'|'READY'|'DELETING' $Status
 * @property \Aws\Api\DateTimeResult $CreatedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property list<GlueTable> $InputRecordTables
 * @property TransformParameters $Parameters
 * @property EvaluationMetrics $EvaluationMetrics
 * @property int $LabelCount
 * @property list<SchemaColumn> $Schema
 * @property string $Role
 * @property string $GlueVersion
 * @property double $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property int $NumberOfWorkers
 * @property int $Timeout
 * @property int $MaxRetries
 * @property TransformEncryption $TransformEncryption
 */
class MLTransform extends Shape
{
    /**
     * @param array{
     *     TransformId?: string,
     *     Name?: string,
     *     Description?: string,
     *     Status?: 'NOT_READY'|'READY'|'DELETING',
     *     CreatedOn?: \Aws\Api\DateTimeResult,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult,
     *     InputRecordTables?: list<GlueTable>,
     *     Parameters?: TransformParameters,
     *     EvaluationMetrics?: EvaluationMetrics,
     *     LabelCount?: int,
     *     Schema?: list<SchemaColumn>,
     *     Role?: string,
     *     GlueVersion?: string,
     *     MaxCapacity?: double,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     NumberOfWorkers?: int,
     *     Timeout?: int,
     *     MaxRetries?: int,
     *     TransformEncryption?: TransformEncryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
