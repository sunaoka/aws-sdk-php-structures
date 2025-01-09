<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRedshift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $Password
 */
class RedshiftDatabaseCredentials extends Shape
{
    /**
     * @param array{
     *     Username: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
