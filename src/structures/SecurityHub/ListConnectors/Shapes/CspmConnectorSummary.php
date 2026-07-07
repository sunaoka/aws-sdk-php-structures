<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectorArn
 * @property string|null $ConnectorId
 * @property string|null $Name
 * @property string|null $Description
 * @property CspmProviderSummary|null $ProviderSummary
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'PENDING_UPDATE'|'PENDING_DELETION'|null $EnablementStatus
 */
class CspmConnectorSummary extends Shape
{
    /**
     * @param array{
     *     ConnectorArn?: string|null,
     *     ConnectorId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ProviderSummary?: CspmProviderSummary|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     EnablementStatus?: 'ENABLED'|'PENDING_ENABLEMENT'|'PENDING_UPDATE'|'PENDING_DELETION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
