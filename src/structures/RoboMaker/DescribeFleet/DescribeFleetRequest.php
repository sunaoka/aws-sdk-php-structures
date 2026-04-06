<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleet
 */
class DescribeFleetRequest extends Request
{
    /**
     * @param array{fleet: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
