<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationAnalysisResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobID
 * @property string|null $networkMigrationExecutionID
 * @property string|null $networkMigrationDefinitionID
 * @property 'REACHABILITY_ANALYZER'|null $analyzerType
 * @property NetworkMigrationAnalysisResultSource|null $source
 * @property NetworkMigrationAnalysisResultTarget|null $target
 * @property 'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $analysisResult
 */
class NetworkMigrationAnalysisResult extends Shape
{
    /**
     * @param array{
     *     jobID?: string|null,
     *     networkMigrationExecutionID?: string|null,
     *     networkMigrationDefinitionID?: string|null,
     *     analyzerType?: 'REACHABILITY_ANALYZER'|null,
     *     source?: NetworkMigrationAnalysisResultSource|null,
     *     target?: NetworkMigrationAnalysisResultTarget|null,
     *     status?: 'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'|null,
     *     analysisResult?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
