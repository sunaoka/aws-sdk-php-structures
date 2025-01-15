<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<string>|null $Values
 * @property string|null $Title
 * @property string|null $Type
 */
class Indicator extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<string>|null,
     *     Title?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
