<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Database
 * @property string $Function
 * @property string $Table
 * @property string $Schema
 * @property string $View
 */
class RedshiftDataShareDetails extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Database: string,
     *     Function?: string,
     *     Table?: string,
     *     Schema?: string,
     *     View?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
