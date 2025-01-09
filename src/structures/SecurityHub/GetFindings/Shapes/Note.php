<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property string $UpdatedBy
 * @property string $UpdatedAt
 */
class Note extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     UpdatedBy: string,
     *     UpdatedAt: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
