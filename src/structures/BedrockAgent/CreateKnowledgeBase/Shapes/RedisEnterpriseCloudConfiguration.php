<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credentialsSecretArn
 * @property string $endpoint
 * @property RedisEnterpriseCloudFieldMapping $fieldMapping
 * @property string $vectorIndexName
 */
class RedisEnterpriseCloudConfiguration extends Shape
{
    /**
     * @param array{
     *     credentialsSecretArn: string,
     *     endpoint: string,
     *     fieldMapping: RedisEnterpriseCloudFieldMapping,
     *     vectorIndexName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
