<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataTableName
 * @property string $DataTableColumns
 * @property string $CopyOptions
 */
class CopyCommand extends Shape
{
    /**
     * @param array{
     *     DataTableName: string,
     *     DataTableColumns?: string,
     *     CopyOptions?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
