<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionString
 * @property string $credentialsSecretArn
 * @property PineconeFieldMapping $fieldMapping
 * @property string $namespace
 */
class PineconeConfiguration extends Shape
{
    /**
     * @param array{
     *     connectionString: string,
     *     credentialsSecretArn: string,
     *     fieldMapping: PineconeFieldMapping,
     *     namespace?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
