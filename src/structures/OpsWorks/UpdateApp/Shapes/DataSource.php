<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Arn
 * @property string|null $DatabaseName
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Arn?: string|null,
     *     DatabaseName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
