<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileArn
 */
class FileFilter extends Shape
{
    /**
     * @param array{fileArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
