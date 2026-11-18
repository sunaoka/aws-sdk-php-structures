<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageLensCostAndUsageReportsPrefixLevel|null $PrefixLevel
 */
class StorageLensCostAndUsageReportsPublish extends Shape
{
    /**
     * @param array{PrefixLevel?: StorageLensCostAndUsageReportsPrefixLevel|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
