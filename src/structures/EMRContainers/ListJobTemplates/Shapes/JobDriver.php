<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SparkSubmitJobDriver|null $sparkSubmitJobDriver
 * @property SparkSqlJobDriver|null $sparkSqlJobDriver
 */
class JobDriver extends Shape
{
    /**
     * @param array{
     *     sparkSubmitJobDriver?: SparkSubmitJobDriver|null,
     *     sparkSqlJobDriver?: SparkSqlJobDriver|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
