<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataField
 * @property string $primaryKeyField
 * @property string $textField
 * @property string $vectorField
 */
class RdsFieldMapping extends Shape
{
    /**
     * @param array{
     *     metadataField: string,
     *     primaryKeyField: string,
     *     textField: string,
     *     vectorField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
