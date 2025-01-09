<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopPiiEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopPiiEntitiesDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
