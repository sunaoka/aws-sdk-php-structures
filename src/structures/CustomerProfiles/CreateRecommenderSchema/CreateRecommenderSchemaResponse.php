<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommenderSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RecommenderSchemaArn
 * @property string $RecommenderSchemaName
 * @property array<string, list<Shapes\RecommenderSchemaField>> $Fields
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'ACTIVE'|'DELETING' $Status
 * @property array<string, string>|null $Tags
 */
class CreateRecommenderSchemaResponse extends Response
{
}
