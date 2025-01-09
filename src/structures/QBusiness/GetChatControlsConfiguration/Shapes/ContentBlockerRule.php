<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $systemMessageOverride
 */
class ContentBlockerRule extends Shape
{
    /**
     * @param array{systemMessageOverride?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
