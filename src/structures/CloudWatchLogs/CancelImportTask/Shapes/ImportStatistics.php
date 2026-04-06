<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CancelImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $bytesImported
 */
class ImportStatistics extends Shape
{
    /**
     * @param array{bytesImported?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
