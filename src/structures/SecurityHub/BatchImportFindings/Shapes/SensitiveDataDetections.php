<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property string $Type
 * @property Occurrences $Occurrences
 */
class SensitiveDataDetections extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Type?: string,
     *     Occurrences?: Occurrences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
