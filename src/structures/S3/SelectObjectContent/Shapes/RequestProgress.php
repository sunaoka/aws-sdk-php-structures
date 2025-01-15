<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 */
class RequestProgress extends Shape
{
    /**
     * @param array{Enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
