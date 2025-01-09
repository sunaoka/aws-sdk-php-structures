<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListEventActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $KeyPattern
 */
class AutoExportRevisionDestinationEntry extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     KeyPattern?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
