<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfaceArn
 * @property list<MergeRouterInputProtocolConfiguration> $ProtocolConfigurations
 * @property int $MergeRecoveryWindowMilliseconds
 */
class MergeRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceArn: string,
     *     ProtocolConfigurations: list<MergeRouterInputProtocolConfiguration>,
     *     MergeRecoveryWindowMilliseconds: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
