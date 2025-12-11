<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableRecordExpirationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647>|null $days
 */
class TableRecordExpirationSettings extends Shape
{
    /**
     * @param array{days?: int<1, 2147483647>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
