<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $creatorModeControl
 */
class CreatorModeConfiguration extends Shape
{
    /**
     * @param array{creatorModeControl: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
