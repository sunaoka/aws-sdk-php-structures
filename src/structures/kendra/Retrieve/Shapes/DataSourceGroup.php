<?php

namespace Sunaoka\Aws\Structures\kendra\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $DataSourceId
 */
class DataSourceGroup extends Shape
{
    /**
     * @param array{
     *     GroupId: string,
     *     DataSourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
