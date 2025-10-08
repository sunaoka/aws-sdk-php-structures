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
     *     CreatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
