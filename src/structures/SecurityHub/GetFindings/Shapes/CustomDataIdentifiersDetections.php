<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property string $Arn
 * @property string $Name
 * @property Occurrences $Occurrences
 */
class CustomDataIdentifiersDetections extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Arn?: string,
     *     Name?: string,
     *     Occurrences?: Occurrences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
