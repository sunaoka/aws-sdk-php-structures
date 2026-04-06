<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionString
 * @property string $credentialsSecretArn
 * @property PineconeFieldMapping $fieldMapping
 * @property string|null $namespace
 */
class PineconeConfiguration extends Shape
{
    /**
     * @param array{
     *     connectionString: string,
     *     credentialsSecretArn: string,
     *     fieldMapping: PineconeFieldMapping,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
