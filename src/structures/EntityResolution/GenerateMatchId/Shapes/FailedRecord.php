<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GenerateMatchId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string $uniqueId
 * @property string $errorMessage
 */
class FailedRecord extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     uniqueId: string,
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
