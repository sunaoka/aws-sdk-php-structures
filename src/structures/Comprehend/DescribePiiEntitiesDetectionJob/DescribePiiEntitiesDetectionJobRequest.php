<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribePiiEntitiesDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribePiiEntitiesDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
