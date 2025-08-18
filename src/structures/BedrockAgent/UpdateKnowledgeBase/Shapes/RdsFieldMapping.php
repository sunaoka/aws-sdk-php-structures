<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $primaryKeyField
 * @property string $vectorField
 * @property string $textField
 * @property string $metadataField
 * @property string|null $customMetadataField
 */
class RdsFieldMapping extends Shape
{
    /**
     * @param array{
     *     primaryKeyField: string,
     *     vectorField: string,
     *     textField: string,
     *     metadataField: string,
     *     customMetadataField?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
