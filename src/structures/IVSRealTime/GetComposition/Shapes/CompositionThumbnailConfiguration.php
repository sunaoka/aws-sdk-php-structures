<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 86400>|null $targetIntervalSeconds
 * @property list<'SEQUENTIAL'|'LATEST'>|null $storage
 */
class CompositionThumbnailConfiguration extends Shape
{
    /**
     * @param array{
     *     targetIntervalSeconds?: int<1, 86400>|null,
     *     storage?: list<'SEQUENTIAL'|'LATEST'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
