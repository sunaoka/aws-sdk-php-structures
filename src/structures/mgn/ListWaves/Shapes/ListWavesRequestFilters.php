<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isArchived
 * @property list<string> $waveIDs
 */
class ListWavesRequestFilters extends Shape
{
    /**
     * @param array{
     *     isArchived?: bool,
     *     waveIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
