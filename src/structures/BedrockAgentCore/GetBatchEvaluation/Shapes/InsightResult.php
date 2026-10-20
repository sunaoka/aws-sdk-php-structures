<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILURE' $type
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property int|null $affectedSessionCount
 * @property list<SampleSession>|null $sampleSessions
 * @property list<InsightRootCause>|null $rootCauses
 */
class InsightResult extends Shape
{
    /**
     * @param array{
     *     type: 'FAILURE',
     *     name: string,
     *     description: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     affectedSessionCount?: int|null,
     *     sampleSessions?: list<SampleSession>|null,
     *     rootCauses?: list<InsightRootCause>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
