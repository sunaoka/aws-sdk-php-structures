<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
