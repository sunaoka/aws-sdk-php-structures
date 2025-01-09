<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetAttachedFileMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property string $FileId
 */
class AttachedFileError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     ErrorMessage?: string,
     *     FileId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
