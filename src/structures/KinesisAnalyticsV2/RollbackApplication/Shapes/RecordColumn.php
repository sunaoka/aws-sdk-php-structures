<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Mapping
 * @property string $SqlType
 */
class RecordColumn extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Mapping?: string,
     *     SqlType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
