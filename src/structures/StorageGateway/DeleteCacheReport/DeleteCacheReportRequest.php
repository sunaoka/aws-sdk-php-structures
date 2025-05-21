<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteCacheReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheReportARN
 */
class DeleteCacheReportRequest extends Request
{
    /**
     * @param array{CacheReportARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
