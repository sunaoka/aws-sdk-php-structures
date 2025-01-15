<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jsonPath
 * @property int|null $recordIndex
 */
class Record extends Shape
{
    /**
     * @param array{
     *     jsonPath?: string|null,
     *     recordIndex?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
