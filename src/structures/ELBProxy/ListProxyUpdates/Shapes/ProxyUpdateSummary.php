<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListProxyUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $updateId
 * @property 'update-proxy-configuration' $type
 * @property 'not-validated'|'valid'|'invalid' $validationStatus
 * @property 'in-progress'|'complete'|'skipped'|'failed'|'cancelled' $propagationStatus
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property \Aws\Api\DateTimeResult|null $validatedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class ProxyUpdateSummary extends Shape
{
    /**
     * @param array{
     *     updateId: string,
     *     type: 'update-proxy-configuration',
     *     validationStatus: 'not-validated'|'valid'|'invalid',
     *     propagationStatus: 'in-progress'|'complete'|'skipped'|'failed'|'cancelled',
     *     submittedAt: \Aws\Api\DateTimeResult,
     *     validatedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
