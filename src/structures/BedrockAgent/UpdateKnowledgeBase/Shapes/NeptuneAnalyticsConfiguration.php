<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $graphArn
 * @property NeptuneAnalyticsFieldMapping $fieldMapping
 */
class NeptuneAnalyticsConfiguration extends Shape
{
    /**
     * @param array{
     *     graphArn: string,
     *     fieldMapping: NeptuneAnalyticsFieldMapping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
