<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeNotebookExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 */
class OutputNotebookS3LocationForOutput extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
