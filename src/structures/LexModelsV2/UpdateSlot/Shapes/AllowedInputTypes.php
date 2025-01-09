<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowAudioInput
 * @property bool $allowDTMFInput
 */
class AllowedInputTypes extends Shape
{
    /**
     * @param array{
     *     allowAudioInput: bool,
     *     allowDTMFInput: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
