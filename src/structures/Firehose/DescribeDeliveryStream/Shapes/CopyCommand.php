<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataTableName
 * @property string|null $DataTableColumns
 * @property string|null $CopyOptions
 */
class CopyCommand extends Shape
{
    /**
     * @param array{
     *     DataTableName: string,
     *     DataTableColumns?: string|null,
     *     CopyOptions?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
