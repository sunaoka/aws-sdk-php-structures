<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetRecommenderSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RecommenderSchemaName
 * @property array<string, list<Shapes\RecommenderSchemaField>> $Fields
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'ACTIVE'|'DELETING' $Status
 */
class GetRecommenderSchemaResponse extends Response
{
}
