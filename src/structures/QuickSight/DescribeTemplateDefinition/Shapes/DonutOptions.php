<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArcOptions|null $ArcOptions
 * @property DonutCenterOptions|null $DonutCenterOptions
 */
class DonutOptions extends Shape
{
    /**
     * @param array{
     *     ArcOptions?: ArcOptions|null,
     *     DonutCenterOptions?: DonutCenterOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
