<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CompareFileType|null $fileType
 */
class File extends Shape
{
    /**
     * @param array{fileType?: CompareFileType|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
