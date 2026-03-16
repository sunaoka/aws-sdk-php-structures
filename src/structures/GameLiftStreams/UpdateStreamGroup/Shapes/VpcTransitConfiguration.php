<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcId
 * @property list<string> $Ipv4CidrBlocks
 */
class VpcTransitConfiguration extends Shape
{
    /**
     * @param array{
     *     VpcId: string,
     *     Ipv4CidrBlocks: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
