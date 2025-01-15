<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cfnStackName
 * @property string $sourceNetworkID
 */
class StartSourceNetworkRecoveryRequestNetworkEntry extends Shape
{
    /**
     * @param array{
     *     cfnStackName?: string|null,
     *     sourceNetworkID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
