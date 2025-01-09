<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property string $Version
 */
class JobEngineVersion extends Shape
{
    /**
     * @param array{
     *     ExpirationDate?: \Aws\Api\DateTimeResult,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
