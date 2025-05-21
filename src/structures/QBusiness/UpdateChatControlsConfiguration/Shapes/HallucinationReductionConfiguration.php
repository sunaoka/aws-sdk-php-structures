<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $hallucinationReductionControl
 */
class HallucinationReductionConfiguration extends Shape
{
    /**
     * @param array{hallucinationReductionControl?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
