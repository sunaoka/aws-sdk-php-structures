<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateInboundConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $InboundConnectorId
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\InboundConnectorConfig|null $InboundConnectorConfiguration
 * @property 'ENABLED'|'DISABLED'|null $InboundConnectorStatus
 */
class UpdateInboundConnectorRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     InboundConnectorId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     InboundConnectorConfiguration?: Shapes\InboundConnectorConfig|null,
     *     InboundConnectorStatus?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
