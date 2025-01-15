<?php

namespace Sunaoka\Aws\Structures\Polly\ListLexicons\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property LexiconAttributes|null $Attributes
 */
class LexiconDescription extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Attributes?: LexiconAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
