<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS'|'NEPTUNE_ANALYTICS'|'OPENSEARCH_MANAGED_CLUSTER'|'S3_VECTORS' $type
 * @property OpenSearchServerlessConfiguration|null $opensearchServerlessConfiguration
 * @property OpenSearchManagedClusterConfiguration|null $opensearchManagedClusterConfiguration
 * @property PineconeConfiguration|null $pineconeConfiguration
 * @property RedisEnterpriseCloudConfiguration|null $redisEnterpriseCloudConfiguration
 * @property RdsConfiguration|null $rdsConfiguration
 * @property MongoDbAtlasConfiguration|null $mongoDbAtlasConfiguration
 * @property NeptuneAnalyticsConfiguration|null $neptuneAnalyticsConfiguration
 * @property S3VectorsConfiguration|null $s3VectorsConfiguration
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS'|'NEPTUNE_ANALYTICS'|'OPENSEARCH_MANAGED_CLUSTER'|'S3_VECTORS',
     *     opensearchServerlessConfiguration?: OpenSearchServerlessConfiguration|null,
     *     opensearchManagedClusterConfiguration?: OpenSearchManagedClusterConfiguration|null,
     *     pineconeConfiguration?: PineconeConfiguration|null,
     *     redisEnterpriseCloudConfiguration?: RedisEnterpriseCloudConfiguration|null,
     *     rdsConfiguration?: RdsConfiguration|null,
     *     mongoDbAtlasConfiguration?: MongoDbAtlasConfiguration|null,
     *     neptuneAnalyticsConfiguration?: NeptuneAnalyticsConfiguration|null,
     *     s3VectorsConfiguration?: S3VectorsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
