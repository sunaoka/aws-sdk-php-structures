<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataSourceArn
 * @property string|null $name
 * @property string|null $description
 * @property 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE'|'AMAZON_BEDROCK_RUNTIME'|null $type
 * @property string|null $serviceRoleArn
 * @property DynamodbDataSourceConfig|null $dynamodbConfig
 * @property LambdaDataSourceConfig|null $lambdaConfig
 * @property ElasticsearchDataSourceConfig|null $elasticsearchConfig
 * @property OpenSearchServiceDataSourceConfig|null $openSearchServiceConfig
 * @property HttpDataSourceConfig|null $httpConfig
 * @property RelationalDatabaseDataSourceConfig|null $relationalDatabaseConfig
 * @property EventBridgeDataSourceConfig|null $eventBridgeConfig
 * @property 'ENABLED'|'DISABLED'|null $metricsConfig
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     dataSourceArn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     type?: 'AWS_LAMBDA'|'AMAZON_DYNAMODB'|'AMAZON_ELASTICSEARCH'|'NONE'|'HTTP'|'RELATIONAL_DATABASE'|'AMAZON_OPENSEARCH_SERVICE'|'AMAZON_EVENTBRIDGE'|'AMAZON_BEDROCK_RUNTIME'|null,
     *     serviceRoleArn?: string|null,
     *     dynamodbConfig?: DynamodbDataSourceConfig|null,
     *     lambdaConfig?: LambdaDataSourceConfig|null,
     *     elasticsearchConfig?: ElasticsearchDataSourceConfig|null,
     *     openSearchServiceConfig?: OpenSearchServiceDataSourceConfig|null,
     *     httpConfig?: HttpDataSourceConfig|null,
     *     relationalDatabaseConfig?: RelationalDatabaseDataSourceConfig|null,
     *     eventBridgeConfig?: EventBridgeDataSourceConfig|null,
     *     metricsConfig?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
