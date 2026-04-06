<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $commitTimestampInMillis
 * @property array<string, string> $eventId
 * @property SparqlData $data
 * @property string $op
 * @property bool|null $isLastOp
 */
class SparqlRecord extends Shape
{
    /**
     * @param array{
     *     commitTimestampInMillis: int,
     *     eventId: array<string, string>,
     *     data: SparqlData,
     *     op: string,
     *     isLastOp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
