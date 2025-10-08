<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GenerateMatchId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string $recordId
 */
class MatchedRecord extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     recordId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
