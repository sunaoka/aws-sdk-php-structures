<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateEventAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string|null $KeyPattern
 */
class AutoExportRevisionDestinationEntry extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPattern?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
