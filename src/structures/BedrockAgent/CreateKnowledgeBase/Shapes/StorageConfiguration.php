<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MongoDbAtlasConfiguration|null $mongoDbAtlasConfiguration
 * @property OpenSearchServerlessConfiguration|null $opensearchServerlessConfiguration
 * @property PineconeConfiguration|null $pineconeConfiguration
 * @property RdsConfiguration|null $rdsConfiguration
 * @property RedisEnterpriseCloudConfiguration|null $redisEnterpriseCloudConfiguration
 * @property 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS' $type
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     mongoDbAtlasConfiguration?: MongoDbAtlasConfiguration|null,
     *     opensearchServerlessConfiguration?: OpenSearchServerlessConfiguration|null,
     *     pineconeConfiguration?: PineconeConfiguration|null,
     *     rdsConfiguration?: RdsConfiguration|null,
     *     redisEnterpriseCloudConfiguration?: RedisEnterpriseCloudConfiguration|null,
     *     type: 'OPENSEARCH_SERVERLESS'|'PINECONE'|'REDIS_ENTERPRISE_CLOUD'|'RDS'|'MONGO_DB_ATLAS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
