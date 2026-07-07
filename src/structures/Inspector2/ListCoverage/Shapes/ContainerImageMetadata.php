<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $imageTags
 * @property \Aws\Api\DateTimeResult|null $imagePulledAt
 * @property \Aws\Api\DateTimeResult|null $lastInUseAt
 * @property int|null $inUseCount
 */
class ContainerImageMetadata extends Shape
{
    /**
     * @param array{
     *     imageTags?: list<string>|null,
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
