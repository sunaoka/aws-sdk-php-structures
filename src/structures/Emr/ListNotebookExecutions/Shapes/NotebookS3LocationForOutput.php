<?php

namespace Sunaoka\Aws\Structures\Emr\ListNotebookExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Key
 */
class NotebookS3LocationForOutput extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
