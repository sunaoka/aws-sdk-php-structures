<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property ImportTableOperationSource $Source
 */
class ImportTableOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: ImportTableOperationSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
