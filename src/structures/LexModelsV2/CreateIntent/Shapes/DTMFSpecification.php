<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxLength
 * @property int $endTimeoutMs
 * @property string $deletionCharacter
 * @property string $endCharacter
 */
class DTMFSpecification extends Shape
{
    /**
     * @param array{
     *     maxLength: int,
     *     endTimeoutMs: int,
     *     deletionCharacter: string,
     *     endCharacter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
