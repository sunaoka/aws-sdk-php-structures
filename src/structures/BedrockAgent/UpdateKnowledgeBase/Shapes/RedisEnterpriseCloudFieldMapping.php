<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataField
 * @property string $textField
 * @property string $vectorField
 */
class RedisEnterpriseCloudFieldMapping extends Shape
{
    /**
     * @param array{
     *     metadataField: string,
     *     textField: string,
     *     vectorField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
