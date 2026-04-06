<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collectionArn
 * @property OpenSearchServerlessFieldMapping $fieldMapping
 * @property string $vectorIndexName
 */
class OpenSearchServerlessConfiguration extends Shape
{
    /**
     * @param array{
     *     collectionArn: string,
     *     fieldMapping: OpenSearchServerlessFieldMapping,
     *     vectorIndexName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
