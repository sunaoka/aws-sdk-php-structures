<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uri
 */
class S3Destination extends Shape
{
    /**
     * @param array{uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
