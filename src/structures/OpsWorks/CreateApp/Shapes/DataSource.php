<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Arn
 * @property string $DatabaseName
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Arn?: string,
     *     DatabaseName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
