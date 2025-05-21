<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NeptuneAnalyticsFieldMapping $fieldMapping
 * @property string $graphArn
 */
class NeptuneAnalyticsConfiguration extends Shape
{
    /**
     * @param array{
     *     fieldMapping: NeptuneAnalyticsFieldMapping,
     *     graphArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
