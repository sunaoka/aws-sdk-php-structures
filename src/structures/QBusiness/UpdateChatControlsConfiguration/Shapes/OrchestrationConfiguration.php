<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $control
 */
class OrchestrationConfiguration extends Shape
{
    /**
     * @param array{control: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
