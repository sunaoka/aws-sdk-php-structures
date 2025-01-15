<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Database
 * @property string|null $Function
 * @property string|null $Table
 * @property string|null $Schema
 * @property string|null $View
 */
class RedshiftDataShareDetails extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Database: string,
     *     Function?: string|null,
     *     Table?: string|null,
     *     Schema?: string|null,
     *     View?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
