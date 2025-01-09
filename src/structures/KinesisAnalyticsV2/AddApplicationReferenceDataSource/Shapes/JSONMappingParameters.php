<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationReferenceDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordRowPath
 */
class JSONMappingParameters extends Shape
{
    /**
     * @param array{RecordRowPath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
