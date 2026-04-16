<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommenderSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderSchemaName
 * @property array<string, list<Shapes\RecommenderSchemaField>> $Fields
 * @property array<string, string>|null $Tags
 */
class CreateRecommenderSchemaRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderSchemaName: string,
     *     Fields: array<string, list<Shapes\RecommenderSchemaField>>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
