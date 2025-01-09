<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlowAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $flowVersion
 */
class FlowAliasRoutingConfigurationListItem extends Shape
{
    /**
     * @param array{flowVersion?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
