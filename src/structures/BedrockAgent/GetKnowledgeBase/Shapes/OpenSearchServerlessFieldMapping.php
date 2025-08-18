<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vectorField
 * @property string $textField
 * @property string $metadataField
 */
class OpenSearchServerlessFieldMapping extends Shape
{
    /**
     * @param array{
     *     vectorField: string,
     *     textField: string,
     *     metadataField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
