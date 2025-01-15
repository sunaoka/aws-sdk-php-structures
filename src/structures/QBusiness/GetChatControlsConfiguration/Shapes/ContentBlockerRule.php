<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $systemMessageOverride
 */
class ContentBlockerRule extends Shape
{
    /**
     * @param array{systemMessageOverride?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
