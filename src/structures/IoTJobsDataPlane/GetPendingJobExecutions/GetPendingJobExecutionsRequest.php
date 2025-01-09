<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\GetPendingJobExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 */
class GetPendingJobExecutionsRequest extends Request
{
    /**
     * @param array{thingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
