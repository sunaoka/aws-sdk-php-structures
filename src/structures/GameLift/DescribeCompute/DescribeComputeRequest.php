<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeCompute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $ComputeName
 */
class DescribeComputeRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     ComputeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
