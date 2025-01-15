<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property string|null $folderPath
 */
class FileBatchJobIdentifier extends Shape
{
    /**
     * @param array{
     *     fileName: string,
     *     folderPath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
