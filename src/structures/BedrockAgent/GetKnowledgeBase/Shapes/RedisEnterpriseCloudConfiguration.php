<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property string $vectorIndexName
 * @property string $credentialsSecretArn
 * @property RedisEnterpriseCloudFieldMapping $fieldMapping
 */
class RedisEnterpriseCloudConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     vectorIndexName: string,
     *     credentialsSecretArn: string,
     *     fieldMapping: RedisEnterpriseCloudFieldMapping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
