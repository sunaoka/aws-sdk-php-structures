<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $commitTimestampInMillis
 * @property array<string, string> $eventId
 * @property PropertygraphData $data
 * @property string $op
 * @property bool|null $isLastOp
 */
class PropertygraphRecord extends Shape
{
    /**
     * @param array{
     *     commitTimestampInMillis: int,
     *     eventId: array<string, string>,
     *     data: PropertygraphData,
     *     op: string,
     *     isLastOp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
