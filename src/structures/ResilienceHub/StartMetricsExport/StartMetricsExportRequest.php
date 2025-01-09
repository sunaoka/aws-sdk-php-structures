<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartMetricsExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property string $clientToken
 */
class StartMetricsExportRequest extends Request
{
    /**
     * @param array{
     *     bucketName?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
