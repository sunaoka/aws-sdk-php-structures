<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MongoDbAtlasConfiguration|null $mongoDbAtlasConfiguration
 * @property NeptuneAnalyticsConfiguration|null $neptuneAnalyticsConfiguration
 * @property OpenSearchManagedClusterConfiguration|null $opensearchManagedClusterConfiguration
 * @property OpenSearchServerlessConfiguration|null $opensearchServerlessConfiguration
 * @property PineconeConfiguration|null $pineconeConfiguration
 * @property RdsConfiguration|null $rdsConfiguration
 * @property RedisEnterpriseCloudConfiguration|null $redisEnterpriseCloudConfiguration
 * @property S3VectorsConfiguration|null $s3VectorsConfiguration
 * @property 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS'|'NEPTUNE_ANALYTICS'|'OPENSEARCH_MANAGED_CLUSTER'|'S3_VECTORS' $type
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     mongoDbAtlasConfiguration?: MongoDbAtlasConfiguration|null,
     *     neptuneAnalyticsConfiguration?: NeptuneAnalyticsConfiguration|null,
     *     opensearchManagedClusterConfiguration?: OpenSearchManagedClusterConfiguration|null,
     *     opensearchServerlessConfiguration?: OpenSearchServerlessConfiguration|null,
     *     pineconeConfiguration?: PineconeConfiguration|null,
     *     rdsConfiguration?: RdsConfiguration|null,
     *     redisEnterpriseCloudConfiguration?: RedisEnterpriseCloudConfiguration|null,
     *     s3VectorsConfiguration?: S3VectorsConfiguration|null,
     *     type: 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS'|'NEPTUNE_ANALYTICS'|'OPENSEARCH_MANAGED_CLUSTER'|'S3_VECTORS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
