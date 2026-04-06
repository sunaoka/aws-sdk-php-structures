<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $imagePulledAt
 * @property \Aws\Api\DateTimeResult|null $lastInUseAt
 * @property int|null $inUseCount
 */
class EcrContainerImageMetadata extends Shape
{
    /**
     * @param array{
     *     tags?: list<string>|null,
     *     imagePulledAt?: \Aws\Api\DateTimeResult|null,
     *     lastInUseAt?: \Aws\Api\DateTimeResult|null,
     *     inUseCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
