<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileArn
 */
class FileContent extends Shape
{
    /**
     * @param array{fileArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
