<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfaceArn
 * @property list<FailoverRouterInputProtocolConfiguration> $ProtocolConfigurations
 * @property 'NO_PRIORITY'|'PRIMARY_SECONDARY' $SourcePriorityMode
 * @property int<0, 1>|null $PrimarySourceIndex
 */
class FailoverRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceArn: string,
     *     ProtocolConfigurations: list<FailoverRouterInputProtocolConfiguration>,
     *     SourcePriorityMode: 'NO_PRIORITY'|'PRIMARY_SECONDARY',
     *     PrimarySourceIndex?: int<0, 1>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
