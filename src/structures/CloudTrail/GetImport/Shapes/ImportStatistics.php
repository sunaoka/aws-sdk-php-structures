<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PrefixesFound
 * @property int $PrefixesCompleted
 * @property int $FilesCompleted
 * @property int $EventsCompleted
 * @property int $FailedEntries
 */
class ImportStatistics extends Shape
{
    /**
     * @param array{
     *     PrefixesFound?: int,
     *     PrefixesCompleted?: int,
     *     FilesCompleted?: int,
     *     EventsCompleted?: int,
     *     FailedEntries?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
