<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartMetricsExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $bucketName
 * @property string|null $clientToken
 */
class StartMetricsExportRequest extends Request
{
    /**
     * @param array{
     *     bucketName?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
