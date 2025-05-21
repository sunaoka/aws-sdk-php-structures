<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

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
