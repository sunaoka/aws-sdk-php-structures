<?php

namespace Sunaoka\Aws\Structures\Emr\ListNotebookExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 */
class NotebookS3LocationForOutput extends Shape
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
