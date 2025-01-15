<?php

namespace Sunaoka\Aws\Structures\drs\StartFailbackLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceNetworkID
 */
class ParticipatingResourceID extends Shape
{
    /**
     * @param array{sourceNetworkID?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
