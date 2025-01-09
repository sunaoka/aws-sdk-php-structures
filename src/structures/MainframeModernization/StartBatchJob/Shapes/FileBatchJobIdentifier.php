<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileName
 * @property string $folderPath
 */
class FileBatchJobIdentifier extends Shape
{
    /**
     * @param array{
     *     fileName: string,
     *     folderPath?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
