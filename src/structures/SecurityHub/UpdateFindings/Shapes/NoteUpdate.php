<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $UpdatedBy
 */
class NoteUpdate extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     UpdatedBy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
