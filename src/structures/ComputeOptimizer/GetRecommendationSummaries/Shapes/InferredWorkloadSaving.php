<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>|null $inferredWorkloadTypes
 * @property EstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class InferredWorkloadSaving extends Shape
{
    /**
     * @param array{
     *     inferredWorkloadTypes?: list<'AmazonEmr'|'ApacheCassandra'|'ApacheHadoop'|'Memcached'|'Nginx'|'PostgreSql'|'Redis'|'Kafka'|'SQLServer'>|null,
     *     estimatedMonthlySavings?: EstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
