<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $waveIDs
 * @property bool|null $isArchived
 */
class ListWavesRequestFilters extends Shape
{
    /**
     * @param array{
     *     waveIDs?: list<string>|null,
     *     isArchived?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
