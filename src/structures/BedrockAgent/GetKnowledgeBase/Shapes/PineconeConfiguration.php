<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectionString
 * @property string $credentialsSecretArn
 * @property string|null $namespace
 * @property PineconeFieldMapping $fieldMapping
 */
class PineconeConfiguration extends Shape
{
    /**
     * @param array{
     *     connectionString: string,
     *     credentialsSecretArn: string,
     *     namespace?: string|null,
     *     fieldMapping: PineconeFieldMapping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
