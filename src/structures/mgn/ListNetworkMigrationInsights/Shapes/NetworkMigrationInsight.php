<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $networkMigrationDefinitionID
 * @property string|null $networkMigrationExecutionID
 * @property string|null $producerID
 * @property 'JOB'|'API'|null $producerType
 * @property 'MAPPING'|'MAPPING_UPDATE'|'CODE_GENERATION'|'DEPLOY'|'DEPLOYED_STACKS_DELETION'|'ANALYZE'|null $producerName
 * @property string|null $segmentID
 * @property string|null $constructID
 * @property string|null $insightID
 * @property 'RUN'|'SEGMENT'|'CONSTRUCT'|null $insightLevel
 * @property 'INTENT_GAP'|'WARNING'|'QUESTION'|'INFO'|'ERROR'|'CONTEXT'|'EXCLUDED'|'BEHAVIOR_CHANGE'|null $insightType
 * @property InsightMessage|null $insightMessage
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class NetworkMigrationInsight extends Shape
{
    /**
     * @param array{
     *     networkMigrationDefinitionID?: string|null,
     *     networkMigrationExecutionID?: string|null,
     *     producerID?: string|null,
     *     producerType?: 'JOB'|'API'|null,
     *     producerName?: 'MAPPING'|'MAPPING_UPDATE'|'CODE_GENERATION'|'DEPLOY'|'DEPLOYED_STACKS_DELETION'|'ANALYZE'|null,
     *     segmentID?: string|null,
     *     constructID?: string|null,
     *     insightID?: string|null,
     *     insightLevel?: 'RUN'|'SEGMENT'|'CONSTRUCT'|null,
     *     insightType?: 'INTENT_GAP'|'WARNING'|'QUESTION'|'INFO'|'ERROR'|'CONTEXT'|'EXCLUDED'|'BEHAVIOR_CHANGE'|null,
     *     insightMessage?: InsightMessage|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
