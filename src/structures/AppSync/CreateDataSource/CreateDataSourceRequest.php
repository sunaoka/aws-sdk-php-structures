<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property string|null $description
 * @property 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE' $type
 * @property string|null $serviceRoleArn
 * @property Shapes\DynamodbDataSourceConfig|null $dynamodbConfig
 * @property Shapes\LambdaDataSourceConfig|null $lambdaConfig
 * @property Shapes\ElasticsearchDataSourceConfig|null $elasticsearchConfig
 * @property Shapes\OpenSearchServiceDataSourceConfig|null $openSearchServiceConfig
 * @property Shapes\HttpDataSourceConfig|null $httpConfig
 * @property Shapes\RelationalDatabaseDataSourceConfig|null $relationalDatabaseConfig
 * @property Shapes\EventBridgeDataSourceConfig|null $eventBridgeConfig
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     description?: string|null,
     *     type: 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE',
     *     serviceRoleArn?: string|null,
     *     dynamodbConfig?: Shapes\DynamodbDataSourceConfig|null,
     *     lambdaConfig?: Shapes\LambdaDataSourceConfig|null,
     *     elasticsearchConfig?: Shapes\ElasticsearchDataSourceConfig|null,
     *     openSearchServiceConfig?: Shapes\OpenSearchServiceDataSourceConfig|null,
     *     httpConfig?: Shapes\HttpDataSourceConfig|null,
     *     relationalDatabaseConfig?: Shapes\RelationalDatabaseDataSourceConfig|null,
     *     eventBridgeConfig?: Shapes\EventBridgeDataSourceConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
