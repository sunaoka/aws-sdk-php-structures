<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class NotebookExportError extends Shape
{
    /**
     * @param array{message: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
