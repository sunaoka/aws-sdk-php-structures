<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property string|null $Type
 * @property Occurrences|null $Occurrences
 */
class SensitiveDataDetections extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     Type?: string|null,
     *     Occurrences?: Occurrences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
