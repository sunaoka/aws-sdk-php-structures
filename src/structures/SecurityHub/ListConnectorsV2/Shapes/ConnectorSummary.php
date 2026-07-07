<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectorsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectorArn
 * @property string $ConnectorId
 * @property string $Name
 * @property string|null $Description
 * @property ProviderSummary $ProviderSummary
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'FAILED_TO_DELETE'|null $EnablementStatus
 * @property string|null $EnablementStatusReason
 */
class ConnectorSummary extends Shape
{
    /**
     * @param array{
     *     ConnectorArn?: string|null,
     *     ConnectorId: string,
     *     Name: string,
     *     Description?: string|null,
     *     ProviderSummary: ProviderSummary,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     EnablementStatus?: 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'FAILED_TO_DELETE'|null,
     *     EnablementStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
