<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 86400> $targetIntervalSeconds
 * @property list<'SEQUENTIAL'|'LATEST'> $storage
 */
class CompositionThumbnailConfiguration extends Shape
{
    /**
     * @param array{
     *     targetIntervalSeconds?: int<1, 86400>,
     *     storage?: list<'SEQUENTIAL'|'LATEST'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
