<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property string|null $Arn
 * @property string|null $Name
 * @property Occurrences|null $Occurrences
 */
class CustomDataIdentifiersDetections extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Occurrences?: Occurrences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
