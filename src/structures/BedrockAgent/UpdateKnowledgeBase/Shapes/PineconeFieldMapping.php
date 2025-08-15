<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $textField
 * @property string $metadataField
 */
class PineconeFieldMapping extends Shape
{
    /**
     * @param array{
     *     textField: string,
     *     metadataField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
