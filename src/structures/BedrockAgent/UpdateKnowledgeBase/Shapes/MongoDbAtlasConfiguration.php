<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collectionName
 * @property string $credentialsSecretArn
 * @property string $databaseName
 * @property string $endpoint
 * @property string|null $endpointServiceName
 * @property MongoDbAtlasFieldMapping $fieldMapping
 * @property string $vectorIndexName
 */
class MongoDbAtlasConfiguration extends Shape
{
    /**
     * @param array{
     *     collectionName: string,
     *     credentialsSecretArn: string,
     *     databaseName: string,
     *     endpoint: string,
     *     endpointServiceName?: string|null,
     *     fieldMapping: MongoDbAtlasFieldMapping,
     *     vectorIndexName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
