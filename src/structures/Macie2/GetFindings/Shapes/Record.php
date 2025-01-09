<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jsonPath
 * @property int $recordIndex
 */
class Record extends Shape
{
    /**
     * @param array{
     *     jsonPath?: string,
     *     recordIndex?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
