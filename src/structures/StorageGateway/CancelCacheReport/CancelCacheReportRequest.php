<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CancelCacheReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheReportARN
 */
class CancelCacheReportRequest extends Request
{
    /**
     * @param array{CacheReportARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
