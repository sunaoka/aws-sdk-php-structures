<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $control
 */
class AppliedOrchestrationConfiguration extends Shape
{
    /**
     * @param array{control: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
