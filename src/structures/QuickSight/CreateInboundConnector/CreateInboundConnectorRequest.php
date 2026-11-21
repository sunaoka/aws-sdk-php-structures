<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateInboundConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $InboundConnectorId
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\InboundConnectorConfig $InboundConnectorConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInboundConnectorRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     InboundConnectorId: string,
     *     Name: string,
     *     Description?: string|null,
     *     InboundConnectorConfiguration: Shapes\InboundConnectorConfig,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
