<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property string $membershipArn
 * @property string $membershipId
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property list<ChildResource>|null $childResources
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'CREATED'|'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'DISALLOWED_BY_DATA_PROVIDER'|'BASE_TABLE_REMOVED'|'RETENTION_PERIOD_EXPIRED' $status
 * @property string|null $statusReason
 * @property string|null $kmsKeyArn
 * @property PopulationAnalysisConfiguration $populationAnalysisConfiguration
 * @property int|null $retentionInDays
 * @property list<IntermediateTableDependency>|null $tableDependencies
 * @property IntermediateTableActiveVersion|null $intermediateTableVersion
 * @property list<'CUSTOM'>|null $analysisRuleTypes
 * @property IntermediateTableSchema|null $schema
 */
class IntermediateTable extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     membershipArn: string,
     *     membershipId: string,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     childResources?: list<ChildResource>|null,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     status: 'CREATED'|'POPULATE_STARTED'|'POPULATE_SUCCESS'|'POPULATE_FAILED'|'DISALLOWED_BY_DATA_PROVIDER'|'BASE_TABLE_REMOVED'|'RETENTION_PERIOD_EXPIRED',
     *     statusReason?: string|null,
     *     kmsKeyArn?: string|null,
     *     populationAnalysisConfiguration: PopulationAnalysisConfiguration,
     *     retentionInDays?: int|null,
     *     tableDependencies?: list<IntermediateTableDependency>|null,
     *     intermediateTableVersion?: IntermediateTableActiveVersion|null,
     *     analysisRuleTypes?: list<'CUSTOM'>|null,
     *     schema?: IntermediateTableSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
