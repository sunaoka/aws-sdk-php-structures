<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customMetadataField
 * @property string $metadataField
 * @property string $primaryKeyField
 * @property string $textField
 * @property string $vectorField
 */
class RdsFieldMapping extends Shape
{
    /**
     * @param array{
     *     customMetadataField?: string|null,
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
