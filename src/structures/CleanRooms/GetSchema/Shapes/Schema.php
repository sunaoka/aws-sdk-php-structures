<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Column> $columns
 * @property list<Column> $partitionKeys
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'> $analysisRuleTypes
 * @property 'DIRECT_QUERY'|'DIRECT_JOB'|'MULTIPLE'|null $analysisMethod
 * @property list<'DIRECT_QUERY'|'DIRECT_JOB'>|null $selectedAnalysisMethods
 * @property string $creatorAccountId
 * @property string $name
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'TABLE'|'ID_MAPPING_TABLE' $type
 * @property list<SchemaStatusDetail> $schemaStatusDetails
 * @property string|null $resourceArn
 * @property SchemaTypeProperties|null $schemaTypeProperties
 */
class Schema extends Shape
{
    /**
     * @param array{
     *     columns: list<Column>,
     *     partitionKeys: list<Column>,
     *     analysisRuleTypes: list<'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'>,
     *     analysisMethod?: 'DIRECT_QUERY'|'DIRECT_JOB'|'MULTIPLE'|null,
     *     selectedAnalysisMethods?: list<'DIRECT_QUERY'|'DIRECT_JOB'>|null,
     *     creatorAccountId: string,
     *     name: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     description: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     type: 'TABLE'|'ID_MAPPING_TABLE',
     *     schemaStatusDetails: list<SchemaStatusDetail>,
     *     resourceArn?: string|null,
     *     schemaTypeProperties?: SchemaTypeProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
