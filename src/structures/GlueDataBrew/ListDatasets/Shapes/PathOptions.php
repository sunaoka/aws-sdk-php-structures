<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterExpression|null $LastModifiedDateCondition
 * @property FilesLimit|null $FilesLimit
 * @property array<string, DatasetParameter>|null $Parameters
 */
class PathOptions extends Shape
{
    /**
     * @param array{
     *     LastModifiedDateCondition?: FilterExpression|null,
     *     FilesLimit?: FilesLimit|null,
     *     Parameters?: array<string, DatasetParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
