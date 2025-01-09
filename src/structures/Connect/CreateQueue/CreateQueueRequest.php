<?php

namespace Sunaoka\Aws\Structures\Connect\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property Shapes\OutboundCallerConfig $OutboundCallerConfig
 * @property Shapes\OutboundEmailConfig $OutboundEmailConfig
 * @property string $HoursOfOperationId
 * @property int $MaxContacts
 * @property list<string> $QuickConnectIds
 * @property array<string, string> $Tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string,
     *     OutboundCallerConfig?: Shapes\OutboundCallerConfig,
     *     OutboundEmailConfig?: Shapes\OutboundEmailConfig,
     *     HoursOfOperationId: string,
     *     MaxContacts?: int,
     *     QuickConnectIds?: list<string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
