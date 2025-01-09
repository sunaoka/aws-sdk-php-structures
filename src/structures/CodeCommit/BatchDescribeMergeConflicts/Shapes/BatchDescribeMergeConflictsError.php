<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property string $exceptionName
 * @property string $message
 */
class BatchDescribeMergeConflictsError extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     exceptionName: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
