<?php

namespace Sunaoka\Aws\Structures\Emr\StartNotebookExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 */
class OutputNotebookS3LocationFromInput extends Shape
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
