<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $applicationVersion
 */
class DescribeSimulationApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     applicationVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
