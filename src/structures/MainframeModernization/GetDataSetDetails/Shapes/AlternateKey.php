<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowDuplicates
 * @property int $length
 * @property string $name
 * @property int $offset
 */
class AlternateKey extends Shape
{
    /**
     * @param array{
     *     allowDuplicates?: bool,
     *     length: int,
     *     name?: string,
     *     offset: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
