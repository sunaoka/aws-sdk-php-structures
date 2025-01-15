<?php

namespace Sunaoka\Aws\Structures\Connect\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\OutboundCallerConfig|null $OutboundCallerConfig
 * @property Shapes\OutboundEmailConfig|null $OutboundEmailConfig
 * @property string $HoursOfOperationId
 * @property int<0, max>|null $MaxContacts
 * @property list<string>|null $QuickConnectIds
 * @property array<string, string>|null $Tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description?: string|null,
     *     OutboundCallerConfig?: Shapes\OutboundCallerConfig|null,
     *     OutboundEmailConfig?: Shapes\OutboundEmailConfig|null,
     *     HoursOfOperationId: string,
     *     MaxContacts?: int<0, max>|null,
     *     QuickConnectIds?: list<string>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
