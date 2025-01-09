<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1024> $maxLength
 * @property int<1, max> $endTimeoutMs
 * @property string $deletionCharacter
 * @property string $endCharacter
 */
class DTMFSpecification extends Shape
{
    /**
     * @param array{
     *     maxLength: int<1, 1024>,
     *     endTimeoutMs: int<1, max>,
     *     deletionCharacter: string,
     *     endCharacter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
