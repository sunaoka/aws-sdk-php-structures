<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryExecutionId
 * @property string|null $Query
 * @property 'DDL'|'DML'|'UTILITY'|null $StatementType
 * @property ResultConfiguration|null $ResultConfiguration
 * @property ResultReuseConfiguration|null $ResultReuseConfiguration
 * @property QueryExecutionContext|null $QueryExecutionContext
 * @property QueryExecutionStatus|null $Status
 * @property QueryExecutionStatistics|null $Statistics
 * @property string|null $WorkGroup
 * @property EngineVersion|null $EngineVersion
 * @property list<string>|null $ExecutionParameters
 * @property string|null $SubstatementType
 * @property QueryResultsS3AccessGrantsConfiguration|null $QueryResultsS3AccessGrantsConfiguration
 */
class QueryExecution extends Shape
{
    /**
     * @param array{
     *     QueryExecutionId?: string|null,
     *     Query?: string|null,
     *     StatementType?: 'DDL'|'DML'|'UTILITY'|null,
     *     ResultConfiguration?: ResultConfiguration|null,
     *     ResultReuseConfiguration?: ResultReuseConfiguration|null,
     *     QueryExecutionContext?: QueryExecutionContext|null,
     *     Status?: QueryExecutionStatus|null,
     *     Statistics?: QueryExecutionStatistics|null,
     *     WorkGroup?: string|null,
     *     EngineVersion?: EngineVersion|null,
     *     ExecutionParameters?: list<string>|null,
     *     SubstatementType?: string|null,
     *     QueryResultsS3AccessGrantsConfiguration?: QueryResultsS3AccessGrantsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
