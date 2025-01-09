<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MongoDbAtlasConfiguration $mongoDbAtlasConfiguration
 * @property OpenSearchServerlessConfiguration $opensearchServerlessConfiguration
 * @property PineconeConfiguration $pineconeConfiguration
 * @property RdsConfiguration $rdsConfiguration
 * @property RedisEnterpriseCloudConfiguration $redisEnterpriseCloudConfiguration
 * @property 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS' $type
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     mongoDbAtlasConfiguration?: MongoDbAtlasConfiguration,
     *     opensearchServerlessConfiguration?: OpenSearchServerlessConfiguration,
     *     pineconeConfiguration?: PineconeConfiguration,
     *     rdsConfiguration?: RdsConfiguration,
     *     redisEnterpriseCloudConfiguration?: RedisEnterpriseCloudConfiguration,
     *     type: 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
