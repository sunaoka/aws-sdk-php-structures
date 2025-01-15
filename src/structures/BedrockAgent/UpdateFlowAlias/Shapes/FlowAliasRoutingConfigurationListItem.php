<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlowAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $flowVersion
 */
class FlowAliasRoutingConfigurationListItem extends Shape
{
    /**
     * @param array{flowVersion?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
