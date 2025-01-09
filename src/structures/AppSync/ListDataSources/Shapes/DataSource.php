<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceArn
 * @property string $name
 * @property string $description
 * @property 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE'|'AMAZON_BEDROCK_RUNTIME' $type
 * @property string $serviceRoleArn
 * @property DynamodbDataSourceConfig $dynamodbConfig
 * @property LambdaDataSourceConfig $lambdaConfig
 * @property ElasticsearchDataSourceConfig $elasticsearchConfig
 * @property OpenSearchServiceDataSourceConfig $openSearchServiceConfig
 * @property HttpDataSourceConfig $httpConfig
 * @property RelationalDatabaseDataSourceConfig $relationalDatabaseConfig
 * @property EventBridgeDataSourceConfig $eventBridgeConfig
 * @property 'ENABLED'|'DISABLED' $metricsConfig
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     dataSourceArn?: string,
     *     name?: string,
     *     description?: string,
     *     type?: 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE'|'AMAZON_BEDROCK_RUNTIME',
     *     serviceRoleArn?: string,
     *     dynamodbConfig?: DynamodbDataSourceConfig,
     *     lambdaConfig?: LambdaDataSourceConfig,
     *     elasticsearchConfig?: ElasticsearchDataSourceConfig,
     *     openSearchServiceConfig?: OpenSearchServiceDataSourceConfig,
     *     httpConfig?: HttpDataSourceConfig,
     *     relationalDatabaseConfig?: RelationalDatabaseDataSourceConfig,
     *     eventBridgeConfig?: EventBridgeDataSourceConfig,
     *     metricsConfig?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
