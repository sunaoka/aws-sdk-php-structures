<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartAnalysisLogExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $keyPrefix
 */
class AnalysisLogExportS3OutputConfiguration extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
