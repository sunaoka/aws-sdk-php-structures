<?php

namespace Sunaoka\Aws\Structures\Polly\ListLexicons\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property LexiconAttributes $Attributes
 */
class LexiconDescription extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Attributes?: LexiconAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
