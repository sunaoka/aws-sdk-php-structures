<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 * @property string $Title
 * @property string $Type
 */
class Indicator extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Values?: list<string>,
     *     Title?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
