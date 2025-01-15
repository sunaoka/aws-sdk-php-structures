<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allowDuplicates
 * @property int $length
 * @property string|null $name
 * @property int $offset
 */
class AlternateKey extends Shape
{
    /**
     * @param array{
     *     allowDuplicates?: bool|null,
     *     length: int,
     *     name?: string|null,
     *     offset: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
