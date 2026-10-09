<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 */
class S3File extends Shape
{
    /**
     * @param array{key: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
