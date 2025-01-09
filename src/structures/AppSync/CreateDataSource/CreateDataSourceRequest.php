<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property string $description
 * @property 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE'|'AMAZON_BEDROCK_RUNTIME' $type
 * @property string $serviceRoleArn
 * @property Shapes\DynamodbDataSourceConfig $dynamodbConfig
 * @property Shapes\LambdaDataSourceConfig $lambdaConfig
 * @property Shapes\ElasticsearchDataSourceConfig $elasticsearchConfig
 * @property Shapes\OpenSearchServiceDataSourceConfig $openSearchServiceConfig
 * @property Shapes\HttpDataSourceConfig $httpConfig
 * @property Shapes\RelationalDatabaseDataSourceConfig $relationalDatabaseConfig
 * @property Shapes\EventBridgeDataSourceConfig $eventBridgeConfig
 * @property 'ENABLED'|'DISABLED' $metricsConfig
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     description?: string,
     *     type: 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE'|'AMAZON_BEDROCK_RUNTIME',
     *     serviceRoleArn?: string,
     *     dynamodbConfig?: Shapes\DynamodbDataSourceConfig,
     *     lambdaConfig?: Shapes\LambdaDataSourceConfig,
     *     elasticsearchConfig?: Shapes\ElasticsearchDataSourceConfig,
     *     openSearchServiceConfig?: Shapes\OpenSearchServiceDataSourceConfig,
     *     httpConfig?: Shapes\HttpDataSourceConfig,
     *     relationalDatabaseConfig?: Shapes\RelationalDatabaseDataSourceConfig,
     *     eventBridgeConfig?: Shapes\EventBridgeDataSourceConfig,
     *     metricsConfig?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
