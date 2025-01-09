<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterExpression $LastModifiedDateCondition
 * @property FilesLimit $FilesLimit
 * @property array<string, DatasetParameter> $Parameters
 */
class PathOptions extends Shape
{
    /**
     * @param array{
     *     LastModifiedDateCondition?: FilterExpression,
     *     FilesLimit?: FilesLimit,
     *     Parameters?: array<string, DatasetParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
