<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collectionArn
 * @property string $vectorIndexName
 * @property OpenSearchServerlessFieldMapping $fieldMapping
 */
class OpenSearchServerlessConfiguration extends Shape
{
    /**
     * @param array{
     *     collectionArn: string,
     *     vectorIndexName: string,
     *     fieldMapping: OpenSearchServerlessFieldMapping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
