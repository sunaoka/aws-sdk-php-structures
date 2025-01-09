<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property list<Shapes\BatchWriteOperation> $Operations
 */
class BatchWriteRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     Operations: list<Shapes\BatchWriteOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
