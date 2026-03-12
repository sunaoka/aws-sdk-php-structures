<?php

namespace Sunaoka\Aws\Structures\SimpleDBv2\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exportArn
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $exportStatus
 * @property \Aws\Api\DateTimeResult $requestedAt
 * @property string $domainName
 */
class ExportSummary extends Shape
{
    /**
     * @param array{
     *     exportArn: string,
     *     exportStatus: 'PENDING'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     requestedAt: \Aws\Api\DateTimeResult,
     *     domainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
