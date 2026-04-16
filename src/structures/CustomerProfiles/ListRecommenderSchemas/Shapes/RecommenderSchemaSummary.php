<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommenderSchemaName
 * @property array<string, list<RecommenderSchemaField>> $Fields
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'ACTIVE'|'DELETING' $Status
 */
class RecommenderSchemaSummary extends Shape
{
    /**
     * @param array{
     *     RecommenderSchemaName: string,
     *     Fields: array<string, list<RecommenderSchemaField>>,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Status: 'ACTIVE'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
