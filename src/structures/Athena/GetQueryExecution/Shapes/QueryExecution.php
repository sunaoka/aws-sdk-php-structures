<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryExecutionId
 * @property string $Query
 * @property 'DDL'|'DML'|'UTILITY' $StatementType
 * @property ResultConfiguration $ResultConfiguration
 * @property ResultReuseConfiguration $ResultReuseConfiguration
 * @property QueryExecutionContext $QueryExecutionContext
 * @property QueryExecutionStatus $Status
 * @property QueryExecutionStatistics $Statistics
 * @property string $WorkGroup
 * @property EngineVersion $EngineVersion
 * @property list<string> $ExecutionParameters
 * @property string $SubstatementType
 * @property QueryResultsS3AccessGrantsConfiguration $QueryResultsS3AccessGrantsConfiguration
 */
class QueryExecution extends Shape
{
    /**
     * @param array{
     *     QueryExecutionId?: string,
     *     Query?: string,
     *     StatementType?: 'DDL'|'DML'|'UTILITY',
     *     ResultConfiguration?: ResultConfiguration,
     *     ResultReuseConfiguration?: ResultReuseConfiguration,
     *     QueryExecutionContext?: QueryExecutionContext,
     *     Status?: QueryExecutionStatus,
     *     Statistics?: QueryExecutionStatistics,
     *     WorkGroup?: string,
     *     EngineVersion?: EngineVersion,
     *     ExecutionParameters?: list<string>,
     *     SubstatementType?: string,
     *     QueryResultsS3AccessGrantsConfiguration?: QueryResultsS3AccessGrantsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
