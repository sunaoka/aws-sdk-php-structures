<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCacheReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheReportARN
 */
class DescribeCacheReportRequest extends Request
{
    /**
     * @param array{CacheReportARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
