<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDatabase $RedshiftDatabase
 * @property string $DatabaseUserName
 * @property string $SelectSqlQuery
 */
class RedshiftMetadata extends Shape
{
    /**
     * @param array{
     *     RedshiftDatabase?: RedshiftDatabase,
     *     DatabaseUserName?: string,
     *     SelectSqlQuery?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
