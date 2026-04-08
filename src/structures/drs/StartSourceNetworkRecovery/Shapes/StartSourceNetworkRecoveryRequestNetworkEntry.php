<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceNetworkID
 * @property string|null $cfnStackName
 */
class StartSourceNetworkRecoveryRequestNetworkEntry extends Shape
{
    /**
     * @param array{
     *     sourceNetworkID: string,
     *     cfnStackName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
