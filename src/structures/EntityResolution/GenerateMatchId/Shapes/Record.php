<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GenerateMatchId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string $uniqueId
 * @property array<string, string> $recordAttributeMap
 */
class Record extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     uniqueId: string,
     *     recordAttributeMap: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
