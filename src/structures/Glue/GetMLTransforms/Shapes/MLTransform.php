<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransformId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'NOT_READY'|'READY'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property list<GlueTable>|null $InputRecordTables
 * @property TransformParameters|null $Parameters
 * @property EvaluationMetrics|null $EvaluationMetrics
 * @property int|null $LabelCount
 * @property list<SchemaColumn>|null $Schema
 * @property string|null $Role
 * @property string|null $GlueVersion
 * @property double|null $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property int|null $MaxRetries
 * @property TransformEncryption|null $TransformEncryption
 */
class MLTransform extends Shape
{
    /**
     * @param array{
     *     TransformId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: 'NOT_READY'|'READY'|'DELETING'|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     InputRecordTables?: list<GlueTable>|null,
     *     Parameters?: TransformParameters|null,
     *     EvaluationMetrics?: EvaluationMetrics|null,
     *     LabelCount?: int|null,
     *     Schema?: list<SchemaColumn>|null,
     *     Role?: string|null,
     *     GlueVersion?: string|null,
     *     MaxCapacity?: double|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     MaxRetries?: int|null,
     *     TransformEncryption?: TransformEncryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
