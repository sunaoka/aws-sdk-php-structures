<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataField
 * @property string $textField
 */
class NeptuneAnalyticsFieldMapping extends Shape
{
    /**
     * @param array{
     *     metadataField: string,
     *     textField: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
