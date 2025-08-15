<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property string $databaseName
 * @property string $collectionName
 * @property string $vectorIndexName
 * @property string $credentialsSecretArn
 * @property MongoDbAtlasFieldMapping $fieldMapping
 * @property string|null $endpointServiceName
 * @property string|null $textIndexName
 */
class MongoDbAtlasConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     databaseName: string,
     *     collectionName: string,
     *     vectorIndexName: string,
     *     credentialsSecretArn: string,
     *     fieldMapping: MongoDbAtlasFieldMapping,
     *     endpointServiceName?: string|null,
     *     textIndexName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
