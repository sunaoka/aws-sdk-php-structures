<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteSimulationApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string|null $applicationVersion
 */
class DeleteSimulationApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     applicationVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
