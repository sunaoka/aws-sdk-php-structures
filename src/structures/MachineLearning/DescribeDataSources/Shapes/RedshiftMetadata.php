<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDatabase|null $RedshiftDatabase
 * @property string|null $DatabaseUserName
 * @property string|null $SelectSqlQuery
 */
class RedshiftMetadata extends Shape
{
    /**
     * @param array{
     *     RedshiftDatabase?: RedshiftDatabase|null,
     *     DatabaseUserName?: string|null,
     *     SelectSqlQuery?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
