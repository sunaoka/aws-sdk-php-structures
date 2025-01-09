<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SparkSubmitJobDriver $sparkSubmitJobDriver
 * @property SparkSqlJobDriver $sparkSqlJobDriver
 */
class JobDriver extends Shape
{
    /**
     * @param array{
     *     sparkSubmitJobDriver?: SparkSubmitJobDriver,
     *     sparkSqlJobDriver?: SparkSqlJobDriver
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
