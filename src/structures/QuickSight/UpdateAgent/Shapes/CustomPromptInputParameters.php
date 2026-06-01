<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResponseLength
 * @property string|null $OutputStyle
 * @property string|null $Identity
 * @property string|null $Tone
 * @property string|null $CustomInstructions
 */
class CustomPromptInputParameters extends Shape
{
    /**
     * @param array{
     *     ResponseLength?: string|null,
     *     OutputStyle?: string|null,
     *     Identity?: string|null,
     *     Tone?: string|null,
     *     CustomInstructions?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
