<?php

namespace Sunaoka\Aws\Structures\drs\TerminateRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceNetworkID
 */
class ParticipatingResourceID extends Shape
{
    /**
     * @param array{sourceNetworkID?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
